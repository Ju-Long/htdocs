<?php

$name = $_POST['name'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query1 = "SELECT * FROM restaurants WHERE name = '$name'";
$result1 = mysqli_query($link, $query1) or die(mysqli_error($link));

$row1 = mysqli_fetch_array($result1);

if(!empty($row1)) {
    
    $id = $row1['rest_id'];
    
    $query2 = "SELECT * FROM reviews WHERE rest_id = $id";
    $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));

    mysqli_close($link);

    $row2 = mysqli_fetch_array($result2);

    if(!empty($row2)) {
        $rating = $row2['rating'];
        $comment = $row2['comment'];

        $message = "Name: $name<br><br>Rating: $rating<br><br>Comment: $comment";
    } else {
        $message = "$name does not have any comment";
    }
} else {
    mysqli_close($link);
    $message = "$name does not have any comment";
}

?>

<html>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>


