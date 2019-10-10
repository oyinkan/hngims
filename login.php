<?php
include 'includes/functions.php';

//invoke function to register user
loginUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - HNGIMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="POST" class="form">
        <h1>Log In</h1>
        <p>Not Registered? <a href="signup.php">Create an account</a></p>
        <label for="email">
            <input type="email" name="email" id="email" placeholder="Email Address">
        </label>
        <label for="password">
            <input type="password" name="password" id="password" placeholder="Password">
        </label>

        <input type="submit" class="submit-form" name="login" id="submit" value="Log In">
    </form>
</body>
</html>