<?php
session_start();
include "./dbFunctions.php";

$queryCate = "SELECT * FROM story_categories";
$resultCate = mysqli_query($link, $queryCate);

while ($row = mysqli_fetch_assoc($resultCate)) {
    $arrCategory[] = $row;
}

$queryStory = "SELECT title FROM stories WHERE category_id = ";
function amountOfStory($link, $queryStory) {
    $resultStory = mysqli_query($link, $queryStory);
    return mysqli_num_rows($resultStory);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Story Summary</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Story Summary</h3>
        
        There are <?php echo count($arrCategory);?> categories in total; <br><br>
        
        <?php for($i = 0; $i < count($arrCategory); $i++) {?>
        <label><?php echo $arrCategory[$i]['name'] . ":"?></label> 
            <?php $queryStory .= $arrCategory[$i]['id']; 
            echo amountOfStory($link, $queryStory) . "<br><br>";
            $queryStory = "SELECT title FROM stories WHERE category_id = ";
            ?>
        <?php } ?>
    </body>
</html>

