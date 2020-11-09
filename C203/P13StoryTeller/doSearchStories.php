<?php
session_start();
include "./dbFunctions.php";

$search = $_POST['search'];
$msg = "";

$query = "SELECT title, content FROM stories 
          WHERE title LIKE '%$search%'
          OR content LIKE '%$search%'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result) == 0) {
    $msg = "There is no matching record";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $arrStories[] = $row;
    }
}
mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Search for Stories</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Search for Stories</h3>
        
        Content Contains: <label><?php echo $search;?></label>
        <?php if (empty($msg)) { ?>
        <table class="box-table">
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
            <?php for ($i = 0; $i < count($arrStories); $i++) { ?>
            <tr>
                <td><?php echo $arrStories[$i]['title'] ?></td>
                <td><?php echo $arrStories[$i]['content']?></td>
            </tr>
            <?php } ?>
        </table>
        <?php } else { echo $msg;}?>
    </body>
</html>