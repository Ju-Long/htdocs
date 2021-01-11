<?php
include './dbFunctions.php';

$id = $_GET['id'];
$query = "SELECT * FROM statistics WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$output = array();

while($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}

echo json_encode($output);
?>
