<?php
include './dbFunctions.php';
$category = Array();

$query = "SELECT id, name FROM flower_categories ORDER BY name";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $category[] = $row;
}

echo json_encode($category);
?>
