<?php
include "dbFunctions.php";
$theID = $_POST['id'];
$newName = $_POST['name'];

$msg = "";
$query = "UPDATE restaurants
          SET name='$newName'
          WHERE rest_id = $theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if($result) {
    $msg = "record successfully updated";
} else {
    $msg = "record not updated";
}
?>

<html>
    <body>
        <?php echo $msg ?>
    </body>
</html>
