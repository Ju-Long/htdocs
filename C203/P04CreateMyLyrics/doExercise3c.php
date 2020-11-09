<?php
$message = "bottle hanging on the wall";
$bottleArray = $_POST['bottle'];

for($i = 1; $i <= count($bottleArray); $i++){
    echo $i ." ".$bottleArray[$i-1]." ". $message."<br/>";
}
?>