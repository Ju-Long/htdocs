<?php

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$postalcode = $_POST['postalcode'];
$country = $_POST['country'];
$preference = $_POST['food'];

echo"Name: " . $name . "<br>"; 
echo"Email: " . $email . "<br>";
if(isset($address)){
    echo"Address: " . $address . "<br>";
}if(isset($postalcode)){
    echo"Postal Code: " . $postalcode . "<br>";
}if(isset($country)){
    echo"Country: " . $country . "<br>";
}if(isset($preference)){
    echo"Food Preference: " . $preference . "<br>";
}
