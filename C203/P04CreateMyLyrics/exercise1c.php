<?php
for($i = 0; $i < 8; $i++){
    for($n = 0; $n < 8; $n++) {
        echo "*";
    }
    echo nl2br("\n");
}

for($i = 0; $i < 8; $i++){
    for($n = 0; $n < $i; $n++) {
           echo "*";
    }
    echo nl2br("\n");
}
?>