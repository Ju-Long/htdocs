<?php
switch (mt_rand(0, 3)) {
  case 0:
    $colour['colour'] = "Orange";
    break;
  case 1:
    $colour['colour'] = "Green";
    break;
  case 2:
    $colour['colour'] = "Blue";
    break;
  case 3:
    $colour['colour'] = "Yellow";
    break;
}
$colour['date'] =  date("d-m-Y");
echo json_encode($colour);
?>
