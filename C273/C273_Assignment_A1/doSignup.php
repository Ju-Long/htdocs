<?php
include './dbFunctions.php';
session_start();

if(isset($_GET['action'])) {
  if($_GET['action'] == "checkUsername") {
    $username = $_GET['username'];
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if (mysqli_num_rows($result) == 0) {
      echo "true";
    } else {
      echo "false";
    }
  }
} else {
  $username = $_POST['signupUsername'];
  $password = $_POST['signupPassword'];
  $height = $_POST['signupHeight'];
  $weight = $_POST['signupWeight'];
  $dob = date("y-m-d", strtotime($_POST['dateOfBirth']));

  echo $dob;
  $query = "INSERT INTO C273_Assignment_A1.user (username, password, height, weight, dateOfBirth)
  VALUES ('$username', sha1('$password'), $height, $weight, '$dob')";
  $result = mysqli_query($link, $query) or die(mysqli_error($link));

  if ($result == 1) {
    $_SESSION['username'] = $username;
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <meta http-equiv='refresh' content='2; url=./index.php'/>
  </body>
</html>
