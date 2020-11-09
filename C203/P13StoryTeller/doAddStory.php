<?php
session_start();
date_default_timezone_set("Singapore");
include "dbFunction";

$time = date("yy-m-d H:i:s");
$userID = $_SESSION['user_id'];
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
$picture = $_POST['fileToUpload'];

$msg = "";
if ($category === "invalid") {
    $_SESSION['title'] = $title;
    $_SESSION['content'] = $content;
    $msg = "You entered a invalid option for category" . 
            "<meta http-equiv='refresh' content='2; url=./addStory.php'/>";
} else {
    $query = "INSERT INTO stories (title, content, author_id, category_id, created_on, picture)
            VALUES ('$title', '$content', $userID, $category, $time, $picture)";
    
    $result = mysqli_query($link, $query);
    if ($result) {
        $msg .= "Story successfully added. \n";
        $msg .= "<meta http-equiv='refresh' content='2; url=./index.php'/>";
    } else {
        $msg .= "Story creation failed." . "<meta http-equiv='refresh' content='2; url=./index.php'/>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Add New Story</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Add New Story</h3>
        
        <?php 
        echo $msg; ?>
    
    </body>
</html>


