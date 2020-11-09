<?php
include "dbFunctions.php";

$queryTravel = "SELECT * FROM travel_highlights";
$resultTravel = mysqli_query($link, $queryTravel);

while ($row = mysqli_fetch_array($resultTravel)) {
    $arrTravel[] = $row;
}
mysqli_close($link);

?>
<html>
    <head>
        <style>
            h1, h2, th {
                font: bold;
            }
            table {
                border: 1px solid black;
            }
            th {
                text-align: center;
            }
            td {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h1>We Were There</h1>
        <br>
        <hr>
        <a href="">Add New Travel Story</a>
        <hr>
        <h2>All Travel Highlights</h2>
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Title</th>
                <th>City</th>
                <th>Picture</th>
                <th>Length(days)</th>
                <th>Total Spent</th>
                <th>Edit</th>
            </tr>
            <?php for($i = 0; $i < count($arrTravel); $i++) {
                $travelID = $arrTravel[$i]['id'];
                $travelTitle = $arrTravel[$i]['title'];
                $travelCity = $arrTravel[$i]['city'];
                $travelPicture = $arrTravel[$i]['picture'];
                $travelLength = $arrTravel[$i]['length_days'];
                $travelTotalSpent = $arrTravel[$i]['total_spending'];
                ?>
            <tr>
                <td><a href="travelDetails.php?id=<?php echo $travelID?>"><?php echo $travelTitle?></a></td>
                <td><?php echo $travelCity ?></td>
                <td><img src="travelPics/<?php echo $travelPicture ?>"></td>
                <td><?php echo $travelLength?></td>
                <td><?php echo $travelTotalSpent ?></td>
                <td><a href="editTravel.php?id=<?php echo $travelID?>">Edit</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>

