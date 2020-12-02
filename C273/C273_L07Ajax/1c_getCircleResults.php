<?php
if (isset($_GET['radius'])) {
  $radius = $_GET['radius'];
}
switch ($_GET['type']) {
  case 'area':
    $output['result'] = ($radius * $radius * 3.142 );
    break;
  case 'circumference' :
    $output['result'] = ($radius * 3.142 * 2);
    break;
}
echo json_encode($output);
