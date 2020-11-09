<?php

$searchMovie = $_POST['title'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM movies WHERE title = '$searchMovie'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

mysqli_close($link);

$row = mysqli_fetch_array($result);

if(!empty($row)) {
    $title = $row['title'];
    $duration = $row['duration_minutes'];
    
    $message = "Name: $title<br>Points: $duration";
} else {
    $message = "no matching recording found";
}
?>
<html>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>

