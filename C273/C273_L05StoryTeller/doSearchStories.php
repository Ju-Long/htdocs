<?php
session_start();
include "./dbFunctions.php";

if (isset($_POST['search'])) {
  $search = $_POST['search'];
} else if (isset($_GET['title'])) {
  $search= $_GET['title'];
}

$msg = "";

$query = "SELECT * FROM stories
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

        <?php
        if($msg == "") {
          for ($i = 0; $i < count($arrStories); $i++){

            $cateID = $arrStories[$i]['category_id'];
            $queryCate = "SELECT * FROM story_categories WHERE id = $cateID";
            $resultCate = mysqli_query($link, $queryCate) or die(mysqli_error($link));

            while ($row = mysqli_fetch_assoc($resultCate)) {
                $cate = $row['name'];
            }

            $authID = $arrStories[$i]['author_id'];
            $queryAuthor = "SELECT * FROM users WHERE id = $authID";
            $resultAuthor = mysqli_query($link, $queryAuthor) or die(mysqli_error($link));

            while ($row = mysqli_fetch_assoc($resultAuthor)) {
                $name = $row['first_name'] . " " . $row['last_name'];
            }

            $title = $arrStories[$i]['title'];
            $content = $arrStories[$i]['content'];
            $picture = $arrStories[$i]['picture'];
            $msg .= "<div class='container'>";
            $msg .= "<h2>$title</h2>";
            $msg .= "<div class='row'>";
            $msg .= "<div class='col-6'>";
            $msg .= "<img class='img-thumbnail mr-auto' style='width: 500px' alt='Responsive image' src='./images/$picture'/>";
            $msg .= "</div>";
            $msg .= "<div class='col-6'>";
            $msg .= "Category: <b>$cate</b>";
            $msg .= "<br>";
            $msg .= "Author: <b>$name</b>";
            $msg .= "<br>";
            $msg .= "<p>$content</p>";
            $msg .= "</div>";
            $msg .= "</div>";
            $msg .= "</div>";
            $msg .= "";
          }
        }
        echo $msg;
        ?>
    </body>
</html>
