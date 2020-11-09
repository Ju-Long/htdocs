<?php
$weight = $_GET['weight'];
$height = $_GET['height'];
$age = $_GET['age'];
$gender = $_GET['gender'];

switch ($gender) {
    case 'M':
        $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
        break;
    case 'F':
        $bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
        break;
}

echo "Your BMR is $bmr";
?>