<?php
include './dbFunctions.php';
$query = "INSERT INTO C273_Assignment_A1.user (username, password, height, weight, dateOfBirth)
VALUES ('JohnDoe', sha1('JohnDoe'), 180, 84, '1999-12-04')";
$result = mysqli_query($link, $query);

?>
