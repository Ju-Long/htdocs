<?php
include './api_check.php';

$query_card = "select * from card";
$return_array = array();

if (isset($_POST['color_id'])) {
    $color_id = $_POST['color_id'];
    $query_card = "select * from card where color_id = $color_id";
}
$result_card = mysqli_query($connection, $query_card) or die(mysqli_error($connection));

foreach($result_card as $i) {
    $return_array[] = $i;
}

if (empty($return_array)) {
    $return = ['output' => 'No card found'];
    echo json_encode($return);
    exit();
}

$return = ['output' => 'success', 'result' => $return_array];
echo json_encode($return);
exit();
