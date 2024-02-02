<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="check.php" method="post">
        <div class="input-field">
            <label for="username">სახელი:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-field">
            <label for="password">პაროლი:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-field">
            <label for="confirmPassword">გაიმეორეთ პაროლი:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>




    </form>
    




</body>
</html>