<?php
$car = $_POST['cars'];

for($i =0; $i < count($car);$i++){
    print_r(nl2br($_POST['cars'][$i]."\n"));
}