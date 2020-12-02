<?php
include './dbFunctions.php';

$code = $_GET['module_code'];

$query = "SELECT S.student_id, S.first_name, S.last_name, A.class FROM allocation A
INNER JOIN student S ON A.student_id = S.student_id
WHERE A.module_code = '$code'";
$result = mysqli_query($link, $query);

$output = Array();

while($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}

echo json_encode($output);
?>
