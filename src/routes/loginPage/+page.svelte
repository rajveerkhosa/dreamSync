<script>

</script>

<style>
    /*
    
    Svelte doesn't use body tag, h1 is not here

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    
    h1{
        text-align: center;
        margin-top: 50px;
    }*/
    
    h2 {
        text-align: center;
        margin-top: 50px;
    }
    
    form {
        width: 300px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    input[type="text"],
    input[type="password"],
    input[type="checkbox"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        width: 100%;
        background-color: blue;
        color: #fff;
        padding: 10px;
        margin-top: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #4CAF50;
    }
    
    label {
        display: block;
        margin-bottom: 10px;
        
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DreamSync Login</title>
</head>
<h2>Login</h2>
<form action="login.php" method="POST">
    <input type="text" name="ID" placeholder="ID #">
    <input type="password" name="password" placeholder="Password"><br>
    <input type="checkbox" id="doctor" name="doctor">
    <label for="doctor"> Doctor Login</label><br><br>
    <input type="submit" name="login" value="Log in">
</form>