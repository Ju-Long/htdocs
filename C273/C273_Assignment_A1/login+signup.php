<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <<?php include './nav.php'?>
    <div class="container">

      <!-- TODO: create a segment control like display to switch between one form and another -->

      <form id="loginForm" action="index.html" method="post">
        <div class="form-group">
          <label for="id_username">Please Enter Your Username: </label>
          <input type="text" class="form-control" id="id_username" name="username"/>
        </div>

        <div class="form-group">
          <label for="id_password">Please Enter Your Password: </label>
          <input type="password" class="form-control" id="id_password" name="username"/>
        </div>
      </form>
    </div>
  </body>
</html>
