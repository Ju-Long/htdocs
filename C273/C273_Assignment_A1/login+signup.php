<?php #Ju Long 19013345 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/segmentAnimation.css">
    <link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
    <style>
      form .error {
        color: #ff0000;
      }
      .error {
        color: #ff0000;
      }
    </style>
  </head>
  <body>
    <?php include './nav.php'?>
    <section class="section" style="max-height: 50px">
      <div class="section-inner">
        <div class="segmented-control" style="width: 300px; color: #11AC63">
          <input type="radio" name="sc-2-1" id="login" checked>
          <input type="radio" name="sc-2-1" id="signup">

          <label for="login" data-value="Login">Login</label>
          <label for="signup" data-value="Signup">Signup</label>
        </div>
      </div>
    </section>
    <div class="container">
      <script type="text/javascript">
      <?php include './js/login+signup.js'; ?>
      </script>

      <form id="loginForm" action="#" method="post">
        <div class="form-group">
          <label for="id_loginUsername">Please Enter Your Username: </label>
          <input type="text" class="form-control" id="id_loginUsername" name="loginUsername"/>
        </div>

        <div class="form-group">
          <label for="id_loginPassword">Please Enter Your Password: </label>
          <input type="password" class="form-control" id="id_loginPassword" name="loginPassword"/>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" value="Reset"/>
      </form>


      <form id="signupForm" action="doSignup.php" method="post" style="display: none">
        <div class="form-group">
          <label for="id_signupUsername">Please Enter a Username: </label>
          <input type="text" class="form-control" id="id_signupUsername" name="signupUsername"/>
        </div>

        <div class="form-group">
          <label for="id_signupPassword">Please Enter a Password: </label>
          <input type="password" class="form-control" id="id_signupPassword" name="signupPassword"/>
        </div>

        <div class="form-group">
          <label for="id_signupConfirmPassword">Please Confirm Your Password: </label>
          <input type="password" class="form-control" id="id_signupConfirmPassword" name="signupConfirmPassword"/>
        </div>

        <div class="form-group row ">
          <div id="height" class="col-6">
            <label for="id_height">Please Enter Your Height (in cm): </label>
            <input type="number" class="custom-form-control" id="id_height" name="signupHeight" min="1" max="300"/>
          </div>
          <div id="weight" class="col-6">
            <label for="id_weight">Please Enter Your Weight (in Kg): </label>
            <input type="number" class="custom-form-control" id="id_weight" name="signupWeight" min="1" max="635"/>
          </div>
        </div>

        <div class="form-group">
          <label>Please Enter Your Date of Birth: </label>
          <div class="row">
            <div class="col-4">
              <label for="date">Date: </label> <input class="custom-form-control" type="number" id="date" name="date" min="1" max="31"/>
            </div>
            <div class="col-4">
              <label for="month">Month: </label> <input class="custom-form-control" type="number" id="month" name="month" min="1" max="12"/>
            </div>
            <div class="col-4">
              <label for="year">Year: </label> <input class="custom-form-control" type="number" id="year" name="year" min="1900"/>
            </div>
          </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" value="Reset"/>
      </form>

      <p class="error" id="error"></p>

    </div>
  </body>
</html>

<?php #Ju Long 19013345 ?>
