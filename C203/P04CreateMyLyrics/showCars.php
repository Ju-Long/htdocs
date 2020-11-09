<?php

$carList = $_POST['cars'];

for($i = 0; $i < count($carList); $i++) {
    echo nl2br(strtolower($carList[$i])."\n");
}