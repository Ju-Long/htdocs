<?php
session_start();
if (isset($_SESSION['user_id'])) {
    session_destroy();
    $message = "You have logged out." .
            "<meta http-equiv='refresh' content='2; url=./home.php'/>";
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Logout</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Logout</h3>
        <hr />
        <?php
        echo $message;
        ?>
    </body>
</html>
