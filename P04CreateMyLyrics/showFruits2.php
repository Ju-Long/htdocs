<?php
$fruitname = $_POST['fruitname'];

for($i =0; $i < count($fruitname); $i++) {
    echo strtoupper($fruitname[$i])."<br>";
}
?>