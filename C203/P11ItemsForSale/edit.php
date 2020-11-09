<?php
session_start();
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

$itemID = $_POST['itemID'];
//echo $itemID;
#echo $itemID;

// create query to retrieve a single record based on the value of $compID 
$queryEdit = "SELECT * FROM used_items
              WHERE id = $itemID";
// execute the query
$status = mysqli_query($link, $queryEdit) or die(mysqli_error($link));

// fetch the execution result to an array
$row = mysqli_fetch_array($status);
if (!empty($row)) {
    $itemName = $row['name'];
    $itemPrice = $row['price'];
    $itemDesc = $row['description'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title>Items for Sale</title>
        <style>
            .submit {
                background: blue;
                border: 1px black;
                color: white;
                padding: 15px 50px;
                text-align: center;
            }
        </style>
    </head>
    <body>
         <?php include "navbar.php" ?>
        <h3>Items for Sale - Edit</h3>
        <label style="font: bold;">Name: </label> <?php echo $itemName;?><br>
        <label style="font: bold;">Price: </label> <?php echo $itemPrice;?><br>
        <form method="post" action="doEdit.php">
            <input type="hidden" name="itemid" value="<?php echo $itemID?>"/>
            <label style="font: bold;">Editable description: </label> <br>
            <textarea name="itemDesc"><?php echo $itemDesc;?></textarea><br>
            <input type="submit" class="button" value="Update Item"/>
        </form>
    </body>
</html>
