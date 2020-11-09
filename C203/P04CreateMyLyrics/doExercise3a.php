<?php
$message = "";

if(isset($_POST['fruits'])) {
    $fruitArray = $_POST['fruits'];
    
    $message .= "The selected fruits are: ";
    for($i =0; $i < count($fruitArray); $i++) {
        $message .="".$fruitArray[$i];
    }
} else{
    $message .= "You have not selected any fruits";
} echo $message;
?>