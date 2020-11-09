<?php
$movieTitle = $_POST['title'];
$movieDuration = $_POST['duration'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$movie_query = "INSERT INTO movies(title, duration_minutes) VALUES('$movieTitle', '$movieDuration')";

$movieResult = mysqli_query($link, $movie_query) or die('Error querying database');

if($movieResult) {
    $movieMessage = "record inserted successfully";
} else {
    $movieMessage = "record insertion failed";
}

mysqli_close($link);
?>

<html>
    <body>
        <?php
        echo $movieMessage;
        ?>
    </body>
</html>


