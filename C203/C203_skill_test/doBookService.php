<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_skilltestinterview";

$link = mysqli_connect($host,$username,$password,$db) or 
        die(mysqli_connect_error());

$user = $_POST['user'];
$centre = $_POST['centre'];
$date = $_POST['service_date'];
$request = $_POST['service_request'];

$query = "INSERT INTO service (user, centre, service_date, service_request)
          VALUES ('$user', '$centre', '$date', '$request')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$msg = "";
if ($result) {
    $msg = "Your booking is successful. See you soon.";
} else {
    $msg = "Your booking failed. Please try again.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $msg;
        ?>
    </body>
</html>
