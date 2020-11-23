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

        <?php
        $message = "";
        for ($i = 0; $i < count($arrStories); $i++){
          $title = $arrStories[$i]['title'];
          $content = $arrStories[$i]['content'];
          $picture = $arrStories[$i]['picture'];
          $message .= "<div class='row'>";
          $message .= "<div class='col-6'>";
          $message .= "<img class='img-thumbnail mr-auto' style='width: 500px' alt='Responsive image' src='./images/$picture'/>";
          $message .= "</div>";
          $message .= "<div class='col-6'>";
          $message .= "<h2><a href='doSearchStories.php?title=$title'>$title</a></h2>";
          $message .= "<br>";
          $message .= "<p>$content</p>";
          $message .= "</div>";
          $message .= "</div>";
          $message .= "";
        }
        echo $message;
        ?>
    </body>
</html>
