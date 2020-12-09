<?php
include './dbFunctions.php';
$query = "INSERT INTO C273_Assignment_A1.user (username, password, height, weight, dateOfBirth)
VALUES ('MikeHunt', sha1('MikeHunt'), 175, 60, '1999-05-16')";
$result = mysqli_query($link, $query);

echo $result;
?>
