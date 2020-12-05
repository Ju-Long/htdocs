<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/segmentAnimation.css">
    <link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46156385-1', 'cssscript.com');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <?php include './nav.php'?>
    <div class="container">

      <section class="section">
        <div class="section-inner">
          <div class="segmented-control" style="width: 300px; color: #11AC63">
            <input type="radio" name="sc-2-1" id="login" checked>
            <input type="radio" name="sc-2-1" id="signup">

            <label for="login" data-value="Login">Login</label>
            <label for="signup" data-value="Signup">Signup</label>
          </div>
        </div>
      </section>

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
            <label for="id_signupConfirmPassword">Please Enter Your Height (in cm): </label>
            <input type="number" class="custom-form-control" id="id_signupConfirmPassword" name="signupConfirmPassword" min="1" max="300"/>
          </div>
          <div id="weight" class="col-6">
            <label for="id_signupConfirmPassword">Please Enter Your Weight (in Kg): </label>
            <input type="number" class="custom-form-control" id="id_signupConfirmPassword" name="signupConfirmPassword" min="1" max="635"/>
          </div>
        </div>
      </form>

    </div>
  </body>
</html>
