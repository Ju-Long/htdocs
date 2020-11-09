<?php
session_start();
include "dbFunctions.php";
$userID = $_SESSION['user_id'];
$email = $_POST['email'];
$username = $_SESSION['username'];

function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $i = 0;
    $pass = '';
    
    while ($i < 9) {
        $num = mt_rand(0, 61);
        $tmp = substr($char, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}

$message = "";

$queryCheck = "SELECT username, email FROM users
               WHERE user_id = $userID";
$resultCheck = mysqli_query($link, $queryCheck);

if (mysqli_num_rows($resultCheck) == 1) {
            $row = mysqli_fetch_array($resultCheck);
            $usernameCheck = $row['username'];
            $emailCheck = $row['email'];
}            
if (($email === $emailCheck) && ($username === $usernameCheck)) {
    if (isset($_POST)) {
        $newpass = createRandomPassword();
        $subject = "NEW PASSWORD";
        $header = "From: $username";
        $emailMessage = "New password: $newpass";

        $queryUpdate = "UPDATE users
                        SET password = SHA1('$password')
                        WHERE user_id = $userID";
        $result = mysqli_query($link, $queryUpdate) or die(mysqli_error($link));

        if ($result) {
            $emailSent = mail($email, $subject, $emailMessage, $header);
            $message .= "The new password has been sent to your email.<br>";
            session_destroy();
            $message .= "<a href='index.php'>Please Login again</a>";
        } else {
            $message .= "Update to database failed.";
        }
    }
} else {
    $message .= "The email does not match. Please try again.";
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>We Are Connected - Logout</h3>
        <hr />
        <?php echo $message; ?>
    </body>
</html>
