<?php
$title = $_POST['event'];
$type = $_POST['type'];
$days = $_POST['days'];

$total = 500 * days;
if($type == "meetings"){
    $total += 70;
}elseif($type == conference){
    $total += 80;
}else{
    $total += 120;
}
if(days > 3){
    $total = $total * 0.9;
}
echo"<h1>Event Organizer</h1>";
echo"<hr>";
echo"Event title: " . $title;
echo"Event type: " . $type;
echo"No of days: " . $days . "<br><br>";
echo"Total cost: $" . $total . "<br><br>";
$formpage = 'formpage.html';
echo"<a href='".$formpage."'>Go back to the form page</a>";
?>