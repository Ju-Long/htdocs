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
$data = [];
$stmt->bind_result($data["title"], $data["content"], $data["picture"]);
while ($stmt->fetch()) {
    $row = [];
    foreach ($data as $key => $val) {
        $row[$key] = $val;
    }
    $array[] = $row;
}
$stmt->close();
$message = "";
for ($i = 0; $i < count($array); $i++){
  $title = $array[$i]['title'];
  $content = $array[$i]['content'];
  $picture = $array[$i]['picture'];
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
