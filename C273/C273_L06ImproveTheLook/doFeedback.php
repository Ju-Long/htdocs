<?php

include("dbFunctions.php");

$visitor_name = $_POST['visitor_name'];
$email = $_POST['email'];
$area = $_POST['area'];
$last_visit = $_POST['last_visit'];
$num = $_POST['num'];
$comments = $_POST['visitor_comments'];
$rating = $_POST['rating'];

//echo $person_name;
//echo $district;
//print_r($_POST);

$query = "INSERT INTO feedbacks(name,area, last_visit, comments, rating, email)
          VALUES
          ('$visitor_name','$area',STR_TO_DATE('$last_visit', '%d/%m/%Y'),'$comments',$rating, '$email')";

echo $query;
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "feedback inserted successfully.<br/>";
} else {
    $msg = "feedback insertion failed.<br/>";
}
$msg .= "<a href='bookList.php'>Book List page</a>";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php echo $msg; ?>
        <meta http-equiv='refresh' content='2; url=./feedback.php'/>
    </body>
</html>
