<?php
include "dbFunctions.php";
$travelID = $_POST['travelID'];
$travelStory = $_POST['travelStory'];

$msg = "";
$queryTravel = "UPDATE travel_highlights
                SET story='$travelStory'
                WHERE id=$travelID";
$resultTravel = mysqli_query($link, $queryTravel);

if($resultTravel) {
    $msg = "story successfully update";
} else {
    $msg = "story update failed";
}
?>
<html>
    <body>
        <?php echo $msg ?>
        <br>
        <a href="index.php">Back to Travel Highlight List</a>
    </body>
</html>