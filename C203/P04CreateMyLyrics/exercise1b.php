<?php
for($i = 1; $i <= 8; $i++) {
    if($i%2 == 0) {
        echo nl2br($i." is even. \n");
    } else {
        echo nl2br($i." is odd. \n");
    }
}

?>