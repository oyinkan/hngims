<?php
/**
 * Created by AminatCanCode.
 * User: HP
 * Date: 09-Oct-19
 * Time: 10:42 AM
 */

include_once './model/dbConnection.php';
/**
 *   The functions registerUser() and loginUser() are used to register a new user and
 *   log a user into the system.
 *   Following are the parameters used in the function
 *   firstname
 *   lastname
 *   username
 *   email
 *   password
 *   phone
 */
function registerUser()
{
//    check for form submission and validate user input
    if (isset($_POST['register'])) {
        global $connection;

        if (empty($_POST['firstname'])) {
            echo "<p style='color: #ff0000;'>First Name is required!</p>";
        } else if (empty($_POST['lastname'])) {
            echo "<p style='color: #ff0000;'>Last Name is required!</p>";
        } else if (empty($_POST['email'])) {
            echo "<p style='color: #ff0000;'>Email is required!</p>";
        } else if (empty($_POST['phone'])) {
            echo "<p style='color: #ff0000;'>Phone Number is required!</p>";
        } else if (empty($_POST['username'])) {
            echo "<p style='color: #ff0000;'>Username is required!</p>";
        } else if (empty($_POST['password'])) {
            echo "<p style='color: #ff0000;'>Password is required!</p>";
        } else {
            echo "<p style='color: #ff0000;'>Input fields cannot be left blank!</p>";
        }

//        collect user input
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //  prevention of user input from sql injection
        $firstName = mysqli_real_escape_string($connection, $firstName);
        $lastName = mysqli_real_escape_string($connection, $lastName);
        $email = mysqli_real_escape_string($connection, $email);
        $phone = mysqli_real_escape_string($connection, $phone);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);


//        password encryption
        $password = password_hash($password, PASSWORD_DEFAULT);

//        insert record into the database
        $query = "INSERT INTO users (firstname, lastname, email, username, phone, password) ";
        $query .= "VALUES ('$firstName', '$lastName', '$email', '$username', '$phone', '$password')";
        $result = mysqli_query($connection, $query);

//        check if record has been inserted
        if (!$result) {
            die('Query Failed' . mysqli_error());
        } else {
            echo "Registration successful";
            header('location: login.php');
        }
    }
}


function loginUser()
{
//check for form submission and validate user input
    if (isset($_POST['login'])) {
        global $connection;

        if (empty($_POST['email'])) {
            echo "<p style='color: #ff0000;'>Email is required!</p>";
        } else if (empty($_POST['password'])) {
            echo "<p style='color: #ff0000;'>Password is required!</p>";
        }

        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

//        $query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
        $query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query Failed!');
        }

//        loop through user table
        while ($row = mysqli_fetch_assoc($result)) {
            $hashedPassword = $row['password'];
            $_SESSION['username'] = $row['username'];
        }

//        check if password entered matches with password in the database
        if (password_verify($password, @$hashedPassword)) {
            header("location: welcome.php");
        } else {
            echo "<p style='color: #ff0000'>Invalid Email or Password!</p>";
        }
    }
}



