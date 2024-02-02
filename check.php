<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="check1">
<h1>Member Status</h1>

<?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        //COLLECT INPUT DATA
        $username = $_POST ["username"];
        $password = $_POST ["password"];
        $confirmPassword = $_POST ["confirmPassword"];

        //check if password match
        if ($password == $confirmPassword) {
            echo "Registration successful.<br>";
            echo $username; 
         } else { 
            echo "Password do not match. Try again.";
         }
    }


?>
</body>