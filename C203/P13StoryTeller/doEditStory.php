<?php
session_start();
include "./dbFunctions.php";

$storyID = $_POST['storyID'];
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];

$msg = "";

if ($category === "invalid") {
    $msg = "You have choose a invalid category choice" .
            "<meta http-equiv='refresh' content='2; url=./editStory.php'/>";
    
} else {
    $query = "UPDATE stories
              SET title = '$title', content = '$content', category_id = $category
              WHERE id = $storyID";
    
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($result) {
        $msg = "You have successfully update the story";
        $msg .= "<meta http-equiv='refresh' content='2; url=./index.php'/>";
    } else {
        $msg = "The update have failed";
        $msg .= "<meta http-equiv='refresh' content='2; url=./index.php'/>";
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Edit Story</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Edit Story</h3>
        
        <?php 
        echo $msg; ?>
    
    </body>
</html>

