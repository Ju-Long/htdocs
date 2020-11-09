<?php
$theTitle = $_POST['title'];
$directorID = $_POST['director'];

// open connection 
$host = "localhost";
$user = "root";
$pass= "";
$db = "c203_p08";

$link = mysqli_connect($host, $user, $pass, $db);

// build sql query
$queryInsert = "INSERT INTO example_movies(d_id, title)
                VALUES ($directorID, '$theTitle')";

// execute sql query
$resultInsert = mysqli_query($link, $queryInsert) or
        die('Error querying database');

// process the result
if($resultInsert) {
    $message = "record inserted successfully";
} else {
    $message = "record insertion failed";
}

// close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>