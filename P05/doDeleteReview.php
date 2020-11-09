<?php

$name = $_POST['name'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "DELETE FROM reviews WHERE rest_id = $name";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

mysqli_close($link);

if($result) {
    $message = "All Reviews for the Restaurant are deleted";
} else {
    $message = "Error";
}
?>

<html>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>