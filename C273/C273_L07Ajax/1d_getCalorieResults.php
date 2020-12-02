<?php
$age = $_GET['age'];
$gender = $_GET['gender'];
$height = $_GET['height'];
$weight = $_GET['weight'];

switch ($gender) {
  case 'men':
    $output['result'] = ((10 * $weight) + (6.25 * $height) - (5 * $age) + 5);
    break;

  default:
    $output['result'] = ((10 * $weight) + (6.25 * $height) - (5 * $age) - 161);
    break;
}
echo json_encode($output);
?>
