<?php
$gender = $_POST['gender'];
if($gender == "male"){
    echo "you have selected male";
} elseif($gender == "female"){
    echo "you have selected female";
} else{
    echo "you have not select a gender";
}
?>
