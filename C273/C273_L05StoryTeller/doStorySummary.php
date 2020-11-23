<?php
include 'dbFunctions.php';
if($link->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT title, content, picture
FROM stories WHERE category_id = (?)";

$stmt = $link->prepare($sql);
$stmt->bind_param("d", $_GET['n']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($title, $content, $picture);
$stmt->fetch();
$stmt->close();

$message = "";
$message .= "<div class='row'>";
$message .= "<div class='col-6'>";
$message .= "<img class='img-thumbnail mr-auto' style='width: 500px' alt='Responsive image' src='./images/$picture'/>";
$message .= "</div>";
$message .= "<div class='col-6'>";
$message .= "<h2><a href='searchStory.php?title=$title'>$title</a></h2>";
$message .= "<br>";
$message .= "<p>$content</p>";
$message .= "</div>";
$message .= "</div>";
$message .= "";

echo $message;
?>
