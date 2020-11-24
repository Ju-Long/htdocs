<?php
include("dbFunctions.php");

// create query
$queryList = "SELECT * FROM feedbacks ORDER BY last_visit desc";

// execute query
$resultList = mysqli_query($link, $queryList) or
        die("Error in query: $query. " . mysqli_error($link));

$query = "SELECT rating, COUNT(rating) FROM feedbacks GROUP BY rating";

// execute query
$result = mysqli_query($link, $query) or die("Error in query: $query. " . mysqli_error($link));

//create an array
$total_ratings = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);

while ($row = mysqli_fetch_array($result)) {
    $total_ratings[$row['rating']] = $row['COUNT(rating)'];
}

//populate the variables below
$labels = "";
$colours = "";
$data = "";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Pie and Donut Charts</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Rating Distribution</h3>
            <?php
            for ($i = 1; $i <= count($total_ratings); $i++) {
                if ($total_ratings[$i] == 1) {
                    echo "There is 1 user who rated the library " . $i;
                } else {
                    echo "There are " . $total_ratings[$i] . " users who rated the library " . $i;
                }
                echo "<br />";
            }
            ?>
        </div>
    </body>
</html>
