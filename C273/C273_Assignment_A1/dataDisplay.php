<?php
session_start();
include './dbFunctions.php';

$username = $_SESSION['username'];
$query = "SELECT id FROM user WHERE username=$username";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];

$queryList = "SELECT f.food_name FROM food_entry fe INNER JOIN food f on fe.food_id = f.id WHERE user_id = $id";
$resultList = mysqli_query($link, $queryList) or die("Error in query: $query. " . mysqli_error($link));

while($row = mysqli_fetch_assoc($resultList)) {
  $name[] = $row['food_name'];
}

$total_ratings = array(1 => 0, 2 => 0, 3 => 0);

$labels = "$name[0], $name[1], $name[2]";
$colours = "'red', 'orange', 'yellow', 'green', 'blue'";
$data = "$total_ratings[1], $total_ratings[2], $total_ratings[3], $total_ratings[4], $total_ratings[5]";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Summary</title>
        <script>
        $(document).ready(function () {
            var pieChart = new Chart($("#pieChart"), {
                type: 'pie',
                data: {
                    datasets: [{
                            data: [<?php echo $data ?>],
                            backgroundColor: [<?php echo $colours ?>],
                            label: 'Feedback Summary'
                        }],
                    labels: [<?php echo $labels ?>]
                },
                options: {
                    responsive: true
                }
            });
          });
        </script>
    </head>

    <body>
        <?php
        include("nav.php");
        ?>
        <div class="container">
            <h3>Rating Distribution</h3>
            <div id="canvas-holder" style="width:100%">
                <canvas id="pieChart" />
            </div>
        </div>
    </body>
</html>
