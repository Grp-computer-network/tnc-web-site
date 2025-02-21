<?php
session_start();

// Hardcoded username & password (Change as needed)
$admin_id = "admin";
$admin_password = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_id = $_POST["admin_id"];
    $input_password = $_POST["admin_password"];

    if ($input_id === $admin_id && $input_password === $admin_password) {
        $_SESSION["loggedin"] = true;
        header("Location: add-events-news.php");
        exit();
    } else {
        $error = "Invalid ID or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
               @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    margin:0;
    padding:0;
    font-family: "poppins";
}
        form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.container {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

/* Heading */
h2 {
    color: #333;
    margin-bottom: 15px;
}
/* Labels */
label {
    font-weight: bold;
    text-align: left;
}

/* Input Fields */
input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    font-size: 16px;
}
button {
    background: #a30000;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

button:hover {
    background: #003366;
}
    </style>
</head>
<body>
    <center> <br>
        <div class="container">
        <h2>Admin Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <label for="admin_id">Admin ID:</label>
            <input type="text" id="admin_id" name="admin_id" required>

            <label for="admin_password">Password:</label>
            <input type="password" id="admin_password" name="admin_password" required>

            <button type="submit">Login</button>
        </form>
    </div>
    </center>
</body>
</html>
