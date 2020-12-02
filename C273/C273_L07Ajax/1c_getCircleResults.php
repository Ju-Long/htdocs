<?php
$radius = $_GET['radius'];
switch ($_GET['type']) {
  case 'area':
    $output['area'] = ($radius * $radius * 3.142 );
    break;
  case 'circumference' :
    $output['circumference'] = ($radius * 3.142 * 2);
    break;
}
echo json_encode($output);
