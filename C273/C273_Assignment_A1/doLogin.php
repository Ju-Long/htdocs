<?php
if(isset($_GET['username'])) {
  $username = $_GET['username'];
  $password = $_GET['password'];

  $query = "SELECT * FROM user WHERE username=$username AND password=$password";

  
}

?>
