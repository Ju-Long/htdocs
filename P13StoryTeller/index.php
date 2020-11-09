<?php 
session_start();
include "./dbFunctions.php";

$query = "SELECT * FROM stories";
$result  = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $arrStories[] = $row;
}
mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Home</title>
    </head>
    <body>
        <?php 
        include "navbar.php";
        ?>
        <h3>Story Teller - Home</h3>
        There are <?php echo count($arrStories); ?> stories in total
        <table class="box-table">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Created On</th>
                <?php 
                if (isset($_SESSION['user_id'])){ ?>
                <th>Edit</th>
                    <?php } ?>
            </tr>
            <?php 
            for ($i = 0; $i < count($arrStories); $i++) {
                $title = $arrStories[$i]['title'];
                $userID = $arrStories[$i]['author_id'];
                $image = $arrStories[$i]['picture'];
                $createdOn = $arrStories[$i]['created_on'];
                $storyID = $arrStories[$i]['id'];  
                ?>
                <tr>
                    <td>
                        <img id="index" src="images/<?php echo $image; ?>"/>
                    </td>
                    <td><a href="storyDetails.php?id=<?php echo $storyID?>"><?php echo $title?></a></td>
                    <td><?php echo $createdOn?></td>
                    <?php 
                    if( isset($_SESSION['user_id'])) {
                        if ($_SESSION['role'] === "admin" || $_SESSION['user_id'] === $userID) {?>
                    <td><a href="editStory.php?id=<?php echo $storyID?>">Edit Story</a></td>
                    <?php } }?>
                </tr>
            <?php } ?>

        </table>
    </body>
</html>
