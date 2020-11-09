<?php
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

//retrieve id from the hidden form field of the previous page (index.php)
$theID = $_POST['itemID'];
#echo $theID;

//build a query to delete a specific record based on id
$queryDelete = "DELETE FROM used_items
                WHERE id = $theID";
$status = mysqli_query($link, $queryDelete) or die(mysqli_error($link));

//if statement to check whether the delete is successful
//store the success or error message into variable $message
if ($status) {
    $message = "Item has been deleted.";
} else {
    $message = "Item delete failed.";
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
        <h3>Items for Sale - Delete Item</h3>
        <?php
        echo $message;
        ?>
    </body>
</html>
