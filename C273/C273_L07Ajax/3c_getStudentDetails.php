<?php
include './dbFunctions.php';

$id = $_GET['student_id'];

$query = "SELECT * FROM student WHERE student_id = $id";
$result = mysqli_query($link, $query);

$output = Array();

while($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}

echo json_encode($output);
?>
