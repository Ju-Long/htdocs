<?php
include "dbFunctions.php";

$travelID = $_GET['id'];

$queryTravel = "SELECT * FROM travel_highlights WHERE id=$travelID";
$resultTravel = mysqli_query($link, $queryTravel) or die(mysqli_error($link));
$rowTravel = mysqli_fetch_array($resultTravel);
if (!empty($rowTravel)) {
    $travelTitle = $rowTravel['title'];
    $travelCity = $rowTravel['city'];
    $travelLength = $rowTravel['length_days'];
    $travelPicture = $rowTravel['picture'];
    $travelTotalSpent = $rowTravel['total_spending'];
    $travelStory = $rowTravel['story'];
}
mysqli_close($link);
?>
<html>
    <head>
        <style>
            header {
                font: bold;
            }
        </style>
    </head>
    <body>
        <header><?php echo $travelTitle ?></header>
        <br>
        <label>City: </label><?php echo $travelCity ?>
        <br>
        <label>Length (in days): </label><?php echo $travelLength ?>
        <br>
        <lablel>Total cost: </lablel><?php echo $travelTotalSpent ?>
        <br><br>
        <img src="travelPics/<?php echo $travelPicture ?>"/>
        <br><br>
        <p><?php echo $travelStory ?></p>
        <br><br>
        <a href="index.php">Back to Travel Highlight List</a>
    </body>
</html>