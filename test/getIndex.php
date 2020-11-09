<?php

$repeat = $_POST['start'];

for($i = 0; $repeat >= $i; $repeat--) {
    if($repeat == 8 || $repeat == 6 || $repeat == 2) {
        echo $repeat. "Steady". "<br>";
    } else if ($repeat == 1){
        echo $repeat. "Shoot!". "<br>";
    } else {
        echo $repeat. str_repeat(" &#127919", $repeat). "<br>";
    }
}

echo substr($string, $i)
?>