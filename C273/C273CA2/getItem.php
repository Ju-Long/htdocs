<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$HOST = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB = 'c273_ca2';
$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB) or die(mysqli_connect_error());

$results = Array();

$query = "SELECT * FROM items WHERE id=$id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $results[] = $row;
}

echo json_encode($results);
 ?>
