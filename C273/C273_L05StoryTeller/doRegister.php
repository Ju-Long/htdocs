<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = "member";

include './dbFunctions.php';
$query = "SELECT username FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_assoc($result)) {
    $arrUsernames[] = $row;
}
$repeated = false;
for ($i = 0; $i < count($arrUsernames); $i++) {
    if ($arrUsernames[$i]['username'] === $username) {
        $repeated = true;
    }
}
$msg = "";
if ($repeated) {
    $msg .= "The entered username is being used. Please enter another one.";
    $msg .= "<meta http-equiv='refresh' content='2; url=./register.php'/>";
} else {
    $queryInsert = "INSERT INTO users (first_name, last_name, username, password, email, role)
                    VALUES ('$firstName', '$lastName', '$username', SHA1('$password'), '$email', '$role')";

    $resultInsert = mysqli_query($link, $queryInsert);
    if ($resultInsert) {
        $msg .= "Account created successfully \n";
        $msg .= "You are now ready to login" . "<meta http-equiv='refresh' content='2; url=./login.php'/>";
    } else {
        $msg .= "Account creation failed" . "<meta http-equiv='refresh' content='2; url=./index.php'/>";
    }
}
?>
    
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Register</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Register</h3>
        <?php echo $msg;?>
    </body>
</html>
