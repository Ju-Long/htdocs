<?php
session_start();
include "dbFunctions.php";

$queryExtract = "SELECT email FROM users";
$result = mysqli_query($link, $queryExtract) or die(mysqli_error($link));

$subject = "Yes";
$header = "From ";
$emailMessage = "test1";

while ($row = mysqli_fetch_assoc($result)) {
    $arrItems[] = $row;
}
for ($i = 0; $i < count($arrItems); $i++) {
    $email = $arrItems[$i]['email'];
    $emailSent = mail($email, $subject, $emailMessage, $header);
}
?>