<?php
session_start();
include "./dbFunctions.php";

$storyID = $_GET['id'];

$query = "SELECT * FROM story_categories";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $arrCategory[] = $row;
}

$queryStory = "SELECT * FROM stories WHERE id = $storyID";
$resultStory = mysqli_query($link, $queryStory) or die(mysqli_error($link));

if (mysqli_num_rows($resultStory) == 1) {
    $row = mysqli_fetch_array($resultStory);
}
mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Edit Story</title>
    </head>
    <body>
        <?php 
        include "navbar.php";
        ?>
        <h3>Story Teller - Edit Story</h3>
        
        <div id="EditStory">
            <form method="post" action="doEditStory.php" id="postform">
                <input type="hidden" name="storyID" value="<?php echo $storyID;?>">
                
                <label>Title: </label>
                <input type="text" name="title" value="<?php echo $row['title']; ?>" required>
                
                <label>Category: </label>
                <select name="category">
                    <option value="invalid">~~~ please select a category ~~~</option>
                    <?php for($i = 0; $i < count($arrCategory); $i++) {
                        if ($arrCategory[$i] == $row['category_id']) { ?>
                    <option value="<?php echo $arrCategory[$i]['id']; ?>" selected="selected"><?php echo $arrCategory[$i]['name']; ?></option>
                        <?php } else { ?>
                    <option value="<?php echo $arrCategory[$i]['id']; ?>"><?php echo $arrCategory[$i]['name']; ?></option>
                        <?php } } ?>
                </select>
                
                <label>Content: </label>
                <textarea name="content"><?php echo $row['content']; ?></textarea>
                
                <input type="submit" value="Update Story" />
            </form>
        </div>
    </body>
</html>
