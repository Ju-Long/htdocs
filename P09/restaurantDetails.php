<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "SELECT * FROM restaurants WHERE rest_id=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $restaurantname = $row['name'];
}
?>

<html>
    <body>
        <?php if (!empty($restaurantname)) { ?>
        <div style="width: 350px;">
            Restaurant Name: <?php echo $restaurantname ?>
        </div>
        <?php } ?>
    </body>
</html>