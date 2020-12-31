$(document).ready(function() {
  $("input[type='radio']").change(function() {
    $(".error").html("");
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
  var mm = today.getMonth()+1;
  var yyyy = today.getFullYear();
  if(dd<10){
    dd='0'+dd
  }
  if(mm<10){
    mm='0'+mm
  }
  $("#year").attr({
    "max": yyyy
  });

  $("#loginForm").submit(function() {
    $(".error").html("");
    $.get("./doLogin.php", {username: $("#id_loginUsername").val(), password: $("#id_loginPassword").val()}, function(data) {
      data = data.trim();
      if(data == "true") {
        location.replace('./index.php');
      } else if (data == "false") {
        $("#id_loginPassword").val("");
        $("#error").html("you enter the wrong username/password.");
      }
    }, "text")
    return false;
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
    $(".error").html("");
    var returned = null;
    $.get("./doSignup.php", {username: $("#id_signupUsername").val()}, function(data) {
      data = data.trim();
      if (data == "true") {
        returned = true;
      } else {
        returned = false;
        $("#error").html("Username have already been taken, please choose another one.")
      }
    }, "text");
    return returned;
  });

  $("#signupForm").validate({
    rules: {
      signupUsername: {
        required: true,
        minlength: 4
      }, signupPassword: {
        required: true,
        minlength: 4
      }, signupConfirmPassword: {
        equalTo: "#id_signupPassword"
      }, signupHeight: {
        required: true
      }, signupWeight: {
        required: true
      }, date: {
        required: true
      }, month: {
        required: true
      }, year: {
        required: true
      }
    },
    messages: {
      signupUsername: {
        required: "Please enter a username",
        minlength: "Please enter more than 5 characters"
      }, signupPassword: {
        required: "Please enter a password",
        minlength: "Please enter a password that is more than 5 characters."
      }, signupConfirmPassword: {
        equalTo: "Please enter the same password"
      }, signupHeight: {
        required: "Please enter your height"
      }, signupWeight: {
        required: "Please enter your weight"
      }, date: {
        required: "Please enter your date of birth"
      }, month: {
        required: "Please enter your month of birth"
      }, year: {
        required: "Please enter your year of birth"
      }
    },
    submitHandler: function() {
      return true;
    }
  });
});
