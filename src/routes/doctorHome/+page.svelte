<script>
    
</script>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    h1 {
        color: #333;
    }
    h2 {
        color: #666;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        color: #333;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    #logout, #view-report, #view-polysomnogram, #insert-patient, #delete-doctor, #create-polysomnogram, #view-patient-health {
        padding: 10px 20px;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }
    #logout {
        background-color: #f44336;
    }
    #logout:hover {
        background-color: #d32f2f;
    }
    #view-report {
        background-color: #4CAF50;
    }
    #view-report:hover {
        background-color: #45a049;
    }
    #view-polysomnogram {
        background-color: #008CBA;
    }
    #view-polysomnogram:hover {
        background-color: #007BB5;
    }
    #insert-patient {
        background-color:purple;
    }
    #insert-patient:hover {
        background-color:#4F2956;
    }
    #delete-doctor {
        background-color:red;
    }
    #delete-doctor:hover {
        background-color:darkred;
    }
    #create-polysomnogram {
        background-color:orange;
    }
    #create-polysomnogram:hover {
        background-color:darkred;
    }
    #view-patient-health {
        background-color:blue;
    }
    #view-patient-health:hover {
        background-color:darkred;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Home</title>
</head>
<div class="container">
    <div class="header">
        <h1>Welcome to your Dashboard, Doctor <?php echo htmlspecialchars($_SESSION["dname"]); ?></h1>
        <form action="logout.php" method="post">
            <button type="submit" id="logout" name="logout">Logout</button>
        </form>
    </div>
    <h2>Your Patients:</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Height</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?php echo htmlspecialchars($patient['Name']); ?></td>
                <td><?php echo htmlspecialchars($patient['Age']); ?></td>
                <td><?php echo htmlspecialchars($patient['Sex']); ?></td>
                <td><?php echo htmlspecialchars($patient['Height']); ?></td>
                <td><?php echo htmlspecialchars($patient['Weight']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a id="view-report" href="doctorData.php">View Sleep Report</a>
    <a id="view-polysomnogram" href="doctorPolysomnogram.php">View Polysomnogram Data</a>
    <a id="insert-patient" href="doctorUpdate.php">Update Patient Info</a>
    <a id="create-polysomnogram" href="createPS.php">Create Polysonmogram</a>
    <a id="view-patient-health" href="viewPMC.php">View Patient Meds and Conditions</a>
    <a id="delete-doctor" href="deleteDoctor.php">Delete Account</a>
    
    
</div>