<?php
session_start();
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

//retrieve computer details from the textarea on the previous page
$itemDesc = $_POST['itemDesc'];
//retrieve id from the hidden form field of the previous page
$itemID = $_POST['itemid'];
$msg = "";

//build a query to update the table
//update the record with the details from the form
$queryUpdate = "UPDATE used_items 
                SET description = '$itemDesc'
                WHERE id = $itemID";
//execute the query
$status = mysqli_query($link, $queryUpdate) or die(mysqli_error($link));
//if statement to check whether the update is successful
//store the success or error message into variable $msg
if ($status) {
    $msg = "Item has been update.";
} else {
    $msg = "Item update failed.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <title>Items for Sale</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Items for Sale - Update Item</h3>
        <?php
        echo $msg;
        ?>
    </body>
</html>
