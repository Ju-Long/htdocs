<?php
session_start();

$user = $_SESSION['user'];
$credit = $_SESSION['credit'];

if (empty($user) || empty($credit)) {
    $msg = "<a href='login.php'>Login</a>";
} else {
    if ($credit < 10) {
        $msg = "<a href='topup.php>Top up</a>'";
    } else {
        $msg = "<a href='ride_anywhere.php>Ride Anywhere</a>";
    }
}
?>

<html>
    <body>
        <?php
        echo $msg; 
        ?>
    </body>
</html>