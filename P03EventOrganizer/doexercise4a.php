<?php
$weight = $_POST['weight'];
$quantity = $_POST['quantity'];
$days = $_POST['days'];
$method = $_POST['method'];

$total = $weight * 0.5;
if($days == "1-2"){
    $total = $total + 40;
} else if($days == "3-5"){
    $total = $total + 25;
} else if($days == "6-9") {
    $total = $total + 10;
} else{
    echo "invalid entry for shipping time";
}

if($method == "air"){
    $total = $total + 40;
} else{
    $total = $total + 25;
}

echo"The total cost of the book is " . $total;