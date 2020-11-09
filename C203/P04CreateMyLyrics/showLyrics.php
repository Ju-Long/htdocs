<?php
echo "Come sing with me <br>";

$starting = $_POST['starting'];
$message = $_POST['message'];

if(empty($_POST['yeah']) && empty($_POST['great'])){
    $additional = "";
    for($i = 1; $i <= count($starting); $i++) {
        echo strtoupper($starting[$i-1]). " ". strtolower($message[$i-1]). "<br>";
    }
} else if(empty($_POST['great']) && isset($_POST['yeah'])){

    for($i = 1; $i <= count($starting); $i++) {
        echo strtoupper($starting[$i-1]). " ". strtolower($message[$i-1]). " yeah". "<br>";
    }
    
} else if(empty($_POST['yeah']) && isset($_POST['great'])) {
    
    for($i = 1; $i <= count($starting); $i++) {
        echo strtoupper($starting[$i-1]). " ". strtolower($message[$i-1]). "great". "<br>";
    }
    
} else {
    for($i = 1; $i <= count($starting); $i++) {
        if($i%2 == 0){
            echo strtoupper($starting[$i-1]). " ". strtolower($message[$i-1]). " ". " great". "<br>";
        } else {
            echo strtoupper($starting[$i-1]). " ". strtolower($message[$i-1]). " ". "yeah". "<br>";
        }
    }
}

