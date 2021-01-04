<?php
include 'dbFunctions.php';

$output = Array();
$query = "SELECT * FROM nutrition";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $output[] = $row;
}

echo json_encode($output);
