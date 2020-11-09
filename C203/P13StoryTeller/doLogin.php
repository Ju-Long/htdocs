<?php
session_start();
include 'dbFunctions.php';

$msg = "";

if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['username'])) {
        //retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        //match the username and password entered with database record
        $query = "SELECT * FROM users 
            WHERE username='" . $username . "' AND password = SHA1('" . $password . "')";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        
        //if record is found, store id and username into session
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['firstname'] = $row['first_name'];
            $_SESSION['lastname'] = $row['last_name'];
            
            $msg = "<meta http-equiv='refresh' content='2; url=./index.php'/>";
        } else {
            $msg = "Sorry, you must enter a valid username 
                    and password to log in." . 
                    "<meta http-equiv='refresh' content='2; url=./login.php'/>";
        }

    }
} else {
    $msg = "You are are already logged in." . 
            "<meta http-equiv='refresh' content='2; url=./index.php'/>";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Login</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Login</h3>
        
        <?php 
        echo $msg; ?>
    
    </body>
</html>
