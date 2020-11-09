<?php

if ($_SERVER['HTTP_HOST'] == "localhost") {
    $username = "root"; 
    $password = "";         // No password for localhost
    $db       = "c203_p13";  
} else { // SERVER homes.soi.rp.edu.sg 
    $username = "s19013345";  // Replace 11111111 with your Student ID    
    $password = "0f2c9a93"; // The password to access SOI SERVER phpMyAdmin
    $db       = $username; 
}

$host = "localhost";
$link = mysqli_connect($host,$username,$password,$db) or 
        die(mysqli_connect_error());

?>
