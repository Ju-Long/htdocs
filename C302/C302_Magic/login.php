<?php
include './DBConnection.php';
header('Content-Type: application/json');

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!($username && $password)){
    echo json_encode(['output' => 'Invalid Input']);
    exit();
}

$return = array();
$password = sha1($password);
$query = "select * from c302_magic where username = '$username' and password = '$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

foreach($result as $i) {
    $return = $i;
}

if (empty($return)) {
    $return = ['output' => 'username or password wrong'];
} else {
    $return['output'] = 'successfully login';
}

echo json_encode($return);