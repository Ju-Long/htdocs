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
        $(document).ready(function() {
          $("input[type='radio']").change(function() {
            if ($("#signup").is(":checked")) {
              $("#loginForm").css('display', 'none');
              $("#signupForm").css('display', 'block');
            } else {
              $("#loginForm").css('display', 'block');
              $("#signupForm").css('display', 'none');
            }
          });

          var today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth()+1; //January is 0!
          var yyyy = today.getFullYear();
          if(dd<10){
            dd='0'+dd
          }
          if(mm<10){
            mm='0'+mm
          }
          today = yyyy+'/'+mm+'/'+dd;
          id_dob.max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];

          $("#loginForm").submit(function() {

          });

          $("#loginForm").validate({
            rules: {
              loginUsername: {
                required: true
              }, loginPassword: {
                required: true
              }
            },
            messages: {
              loginUsername: {
                required: "Please enter your username"
              }, loginPassword: {
                required: "Please enter your password"
              }
            },
            submitHandler: function() {
              return true;
            }
          });

          $("#signupForm").submit(function() {

          });

          $("#signupForm").validate({
            rules: {
              signupUsername: {
                required: true
              }, signupPassword: {
                required: true
              }
            },
            messages: {
              loginUsername: {
                required: "Please enter your username"
              }, loginPassword: {
                required: "Please enter your password"
              }
            },
            submitHandler: function() {
              return true;
            }
          });
        });
      </script>

      <form id="loginForm" action="doLogin.php" method="post">
        <div class="form-group">
          <label for="id_loginUsername">Please Enter Your Username: </label>
          <input type="text" class="form-control" id="id_loginUsername" name="loginUsername"/>
        </div>

        <div class="form-group">
          <label for="id_loginPassword">Please Enter Your Password: </label>
          <input type="password" class="form-control" id="id_loginPassword" name="loginPassword"/>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" id="btnReset" value="Reset"/>
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
          <label for="id_dob">Please Confirm Your Password: </label>
          <input type="date" class="form-control" id="id_dob" name="dateOfBirth"/>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" id="btnReset" value="Reset"/>
      </form>

    </div>
  </body>
</html>
