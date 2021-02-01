<?php

    $username = "root";
    $password = "";         // No password for localhost
    $db       = "c273_p12";


$host = "34.126.76.15";
$link = mysqli_connect($host,$username,$password,$db) or
        die(mysqli_connect_error());

?>
