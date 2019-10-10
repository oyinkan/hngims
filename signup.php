<?php
include 'includes/functions.php';

//invoke function to register user
registerUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="signup.php" method="POST" class="form">
    <h1>Sign Up</h1>
    <p>Already Signed Up? <a href="login.php">Login</a></p>
    <label for="firstname" class="two-col">
        <input type="text" name="firstname" placeholder="First Name">
    </label>
    <label for="lastname" class="two-col">
        <input type="text" name="lastname" placeholder="Last Name">
    </label>
    <label for="email">
        <input type="email" name="email" placeholder="example@hngi.int">
    </label>
    <label for="phone">
        <input type="tel" name="phone" placeholder="08123456789" maxlength="11">
    </label>
    <label for="username">
        <input type="tel" name="username" placeholder="Username">
    </label>
    <div>
        <label for="password" class="two-col">
            <input type="password" name="password" id="password" placeholder="Password">
        </label>

        <label for="c-password" class="two-col">
            <div>
                <input type="password" id="confirm_password" placeholder="Confirm Password" oninput="Validate();">

                <small style="color: #ff0000;"><p id="validPasswordConfirm"></p></small>
            </div>
        </label>
    </div>
    <input class="submit-form" type="submit" name="register" value="Sign Up">
</form>


<!--JavaScript Function for password confirmation-->
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            document.getElementById("validPasswordConfirm").innerHTML = "Password does not match!";

        } else {
            document.getElementById("validPasswordConfirm").innerHTML = "Password match!";
            return true;
        }

    }

    // function passWordConfirm(){
    //     let password = document.querySelector("#password").value;
    //     let passwordMain = document.querySelector("#password").value;
    //     let tpattern =  /^(?=[^\s]*?[0-9])(?=[^\s]*?[a-zA-Z])[a-zA-Z0-9]{2,20}$/;
    //
    //
    //     if(tpattern.test(String(password))  == true  && (passwordMain === password) ){
    //         ttext = "Password match";
    //     } else {
    //         if(tpattern.test(String(password))  != true  && (passwordMain != password) )
    //         {
    //             ttext = "Password must contain letters and numbers only (20 characters max) and must match Password above";
    //
    //         }
    //         else if(tpattern.test(String(password))  != true)
    //         {
    //             ttext = "Password must contain letters and numbers only (20 characters max)";
    //         }
    //         else if(passwordMain != password)
    //         {
    //             ttext = "Password Missmatch";
    //         }
    //
    //     }
    //
    //     document.getElementById("validPasswrdConfirm").innerHTML = ttext;

    // }
</script>
</body>
</html>