<?php
include './dbFunctions.php';

$id = $_GET['f_id'];
$output = Array();
$query = "SELECT description, picture FROM flowers WHERE id = $id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}
echo json_encode($output);
?>
