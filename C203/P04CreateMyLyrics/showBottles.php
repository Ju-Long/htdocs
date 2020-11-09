<?php

$colour = $_POST['colour'];
$action = $_POST['action'];

for($i = 1; $i <= count($colour); $i++) {
    echo $i. " ". $colour[$i-1]. " bottle ". $action[$i-1]. " on the wall". "<br>";
}