<?php
$name = $_POST['name'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "INSERT INTO reviews(rest_id,rating,comment) Values('$name','$rating','$comment')";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

mysqli_close($link);

$message = "";

if($result) {
    $message .= "Rating: $rating <br>";
    $message .= "Comment: $comment <br><br>";
    $message .= "<b>record insert successfully!</b>";
} else { 
    $message .= "record insertion failed";
}  
?>


<html>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>