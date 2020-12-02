<?php
include './dbFunctions.php';

$query = "SELECT * FROM student";
$result = mysqli_query($link, $query);

$output = Array();

while($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}

echo json_encode($output);
?>
