<?php
// Start the session
session_start();

// Check if session variables are set
if (!isset($_SESSION["ID"]) || !isset($_SESSION["dname"])) {
    echo "Session data not set. Please log in again.";
    exit;
}

require_once("config.php");

try {
    $db = get_db();

    // Prepare statement to fetch the doctor's name
    $bindDoc = $db->prepare("SELECT dname FROM Doctor WHERE DID = ?");
    $bindDoc->bindParam(1, $_SESSION["ID"], PDO::PARAM_INT);

    if (!$bindDoc->execute()) {
        throw new Exception("Failed to execute doctor query: " . implode(", ", $bindDoc->errorInfo()));
    }

    $docArr = $bindDoc->fetchAll(PDO::FETCH_ASSOC);
    if (count($docArr) > 0) {
        $_SESSION["dname"] = $docArr[0]['dname'];
    } else {
        echo "Doctor not found.";
        exit;
    }

    // Query to fetch the doctor's patients ordered by name
    $patientQuery = $db->prepare("
        SELECT pname AS Name, Age, Sex, Height, Weight 
        FROM Patient 
        WHERE DID = ? 
        ORDER BY pname
    ");
    $patientQuery->bindParam(1, $_SESSION["ID"], PDO::PARAM_INT);

    if ($patientQuery->execute()) {
        $patients = $patientQuery->fetchAll(PDO::FETCH_ASSOC);
    } else {
        throw new Exception("Failed to execute patient query: " . implode(", ", $patientQuery->errorInfo()));
    }

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
    exit;
}
?>