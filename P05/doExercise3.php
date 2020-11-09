<?php

$searchName = $_POST['memberName'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM members WHERE name = '$searchName'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

mysqli_close($link);

$row = mysqli_fetch_array($result);

if(!empty($row)) {
    $name = $row['name'];
    $points = $row['points'];
    
    $message = "Name: $name<br>Points: $points";
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

