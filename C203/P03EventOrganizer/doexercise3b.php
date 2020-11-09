<?php
$col = $_POST['colour'];
if($col == "red"){
    echo "the cost will be 5";
} elseif($col == "green"){
    echo "the cost will be 10";
} else{
    echo "the cost will be 15";
}
?>