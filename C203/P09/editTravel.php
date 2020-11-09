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
    <body>
        <form action="doEditTravel.php" method="post">
            <input type="hidden" name="travelID" value="<?php echo $travelID?>">
            <img src="travelPics/<?php echo $travelPicture ?>"/>
            <br>
            <label>Title: <?php echo $travelTitle?></label>
            <br>
            <label>City: <?php echo $travelCity?></label>
            <br>
            <label>Length(in days): <?php echo $travelLength?></label>
            <br>
            <label>Total cost: <?php echo $travelTotalSpent?></label>
            <br><br>
            Editable story:
            <textarea name="travelStory"><?php echo $travelStory?></textarea>
            <br><br>
            <input type="submit" value="Update" />
        </form>
    </body>
</html>