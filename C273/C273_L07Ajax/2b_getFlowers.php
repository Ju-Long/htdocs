<?php
include './dbFunctions.php';
$cat = $_GET['cat_id'];
$output = Array();

$query = "SELECT id, name FROM flowers WHERE cat_id = $cat";
$result = mysqli_query($link, $query);

while($row=mysqli_fetch_assoc($result)){
  $output[] = $row;
};
echo json_encode($output);
?>
