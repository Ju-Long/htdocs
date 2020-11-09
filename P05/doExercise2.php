<?php
$theName = $_POST['memberName'];
$theScore = $_POST['score'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "INSERT INTO members(name, points) VALUES('$theName','$theScore')";

$result = mysqli_query($link, $query) or die('Error querying database');

if($result) {
    $message = "record insert successfully";
} else { 
    $message = "record insertion failed";
}

mysqli_close($link);
?>

<html>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>