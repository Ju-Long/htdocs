<?php
session_start();
include "./dbFunctions.php";

$userID = $_SESSION['user_id'];
$oldPass = $_POST['oldPassword'];
$newPass = $_POST['newPassword'];
$msg = "";

$query = "SELECT password FROM users
          WHERE id = $userID";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $pass = $row['password'];
}
$oldPass = sha1($oldPass);
$newPass = sha1($newPass);
if ($oldPass === $pass) {
    $queryUpload = "UPDATE users
                    SET password = '$newPass'
                    WHERE id = $userID";
    $resultUpload = mysqli_query($link, $queryUpload) or die(mysqli_error($link));
    
    $msg = "Upload Complete, Redirecting to Home...";
    $msg .= "<meta http-equiv='refresh' content='2; url=./index.php'/>";
            
} else {
    $msg = "The old password is incorrect, please try again.";
    $msg .= "<meta http-equiv='refresh' content='2; url=./changePassword.php'/>";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Change Password</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Change Password</h3>
        
        <?php 
        echo $msg; ?>
    
    </body>
</html>

