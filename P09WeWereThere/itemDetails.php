<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$queryItem = "SELECT * FROM items WHERE id=$theID";
$resultItem = mysqli_query($link, $queryItem) or die(mysqli_error($link));
$rowItem = mysqli_fetch_array($resultItem);

if (!empty($rowItem)) {
    $itemName = $rowItem['name'];
    $itemDescription = $rowItem['description'];
    $itemDateSold = $rowItem['date_sold'];
    $itemQuality = $rowItem['quality'];
    $itemPrice = $rowItem['price'];
    $itemImageName = $rowItem['image'];
}
?>
<html>
    <body>
        <?php if (!empty($itemName)) { ?>
        <p style="font: bold">Item Name: </p> <?php echo $itemName ?>
        <p style="font: bold">Description: </p> <?php echo $itemDescription ?>
        <p style="font: bold">Date Sold: </p> <?php echo $itemDateSold ?>
        <p style="font: bold">Quality: </p> <?php echo $itemQuality ?>
        <p style="font: bold">Price: </p> <?php echo $itemPrice ?>
        <img src="itemPics/<?php echo $itemImageName?>">
        <?php } ?>
    </body>
</html>
