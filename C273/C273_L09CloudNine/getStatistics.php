<?php
include './dbFunctions.php';

$query = "SELECT * FROM statistics";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$output = array();

while ($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}

echo json_encode($output);

$response[“name”] = “Bob”;
$response[“phone”] = “1234”;
echo json_encode($response);
?>
