<?php

$fruitArray = array("apple", "orange", "pineapple");

for($i = 0; $i < count($fruitArray); $i++) {
    echo $fruitArray[$i]. " (". strlen($fruitArray[$i]). ") <br/>";
}
?>
