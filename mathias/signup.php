<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include './extension.php'; ?>
    <style media="screen">
      form {
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <?php include './nav.php'; ?>
    <div class="container">
      <h2>Login</h2>
      <form action="">
        <div class="form-group">
          <label for="id_username">Username: </label>
          <input type="text" id="id_username" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="id_password">Password: </label>
          <input type="password" id="id_password" class="form-control" name="password">
        </div>
        <div class="form-group">
          <label for="id_weight">Weight(Kg): </label>
          <input type="number" id="id_weight" class="form-control" name="weight" step=".01">
        </div>
        <div class="form-group">
          <label for="id_height">Height(M): </label>
          <input type="number" id="id_height" class="form-control" name="height" step=".01">
        </div>
        <div class="form-group">
          <label for="id_dob">Date of Birth: </label>
          <input type="text" id="id_dob" class="form-control" name="dob">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
