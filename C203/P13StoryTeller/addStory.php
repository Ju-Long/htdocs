<?php 
session_start();
include "./dbFunctions.php";

$query = "SELECT * FROM story_categories";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $arrCategory[] = $row;
}
mysqli_close($link);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Add New Story</title>
    </head>
    <body>
        <?php 
        include "navbar.php";
        ?>
        <h3>Story Teller - Add New Story</h3>
        
        <div id="AddNewStory">
            <form method="post" action="doAddStory.php" id="postform">
                <label>Title: </label>
                <input type="text" name="title" value="<?php if(isset($_SESSION['title'])) {echo $_SESSION['title']; } ?>" required>
                
                <label>Category: </label>
                <select name="category">
                    <option value="invalid">~~~ please select a category ~~~</option>
                    <?php for($i = 0; $i < count($arrCategory); $i++) { ?>
                    <option value="<?php echo $arrCategory[$i]['id']; ?>"><?php echo $arrCategory[$i]['name']; ?></option>
                    <?php } ?>
                </select>
                
                <label>Content: </label>
                <textarea name="content"> <?php if(isset($_SESSION['content'])) {echo $_SESSION['content']; } ?> </textarea>
                
                <label>Picture: </label> <br>
                <input type="file" name="fileToUpload" required>
                
                <input type="submit" value="Submit" />
            </form>
        </div>
    </body>
</html>