<?php
include './api_check.php';

$card_name = $_POST['card_name'] ?? '';
$color_id = $_POST['color_id'] ?? 0;
$type_id = $_POST['type_id'] ?? 0;
$price = $_POST['price'] ?? -1;
$amount = $_POST['amount'] ?? -1;

if (!($card_name && $color_id && $type_id) && $price < 0 && $amount < 0) {
    $return = ['output' => 'Invalid Paramters'];
    echo json_encode($return);
    exit();
}

$query_add_card = "insert into card (cardName, colourId, typeId, price, quantity) values ('$card_name', $color_id, $type_id, $price, $amount)";
$result = mysqli_query($connection, $query_add_card) or die(mysqli_error($connection));

if ($result) {
    $return = ['output' => 'success'];
} else {
    $return = ['output' => 'failed'];
}
echo json_encode($return);
exit();