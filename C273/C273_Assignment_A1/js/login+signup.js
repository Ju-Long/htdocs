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
    $.get("./doLogin.php", {username: $("#id_loginUsername").val(), password: $("#id_loginPassword").val()}, function(data) {
      if(data == "true") {
        location.replace("index.php");
      } else {
        $("#id_loginPassword").val("");
        $("#error").html("you enter the wrong username/password.");
      }
    }, "text")
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
    $.get("./doSignup.php", {action: "checkUsername", username: $("#id_signupUsername").val()}, function(data) {
      if (data === "true") {
        return true;
      } else {
        return false;
        $("#error").html("Username have already been taken, please choose another one.")
      }
    }, "text");


  });

  $("#signupForm").validate({
    rules: {
      signupUsername: {
        required: true,
        minlength: 4
      }, signupPassword: {
        required: true
      }, signupConfirmPassword: {
        equalTo: "#id_signupPassword"
      }, signupHeight: {
        required: true
      }, signupWeight: {
        required: true
      }, dateOfBirth: {
        required: true,
        date: true
      }
    },
    messages: {
      signupUsername: {
        required: "Please enter a username",
        minlength: "Please enter more than 5 characters",
      }, signupPassword: {
        required: "Please enter a password"
      }, signupConfirmPassword: {
        equalTo: "Please enter the same password"
      }, signupHeight: {
        required: "Please enter your height"
      }, signupWeight: {
        required: "Please enter your weight"
      }, dateOfBirth: {
        required: "Please enter your date of birth",
        date: "Please enter in date format"
      }
    },
    submitHandler: function() {
      return true;
    }
  });
});
