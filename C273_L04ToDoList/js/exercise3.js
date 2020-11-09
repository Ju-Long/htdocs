$(document).ready(function() {
  $("form").submit(function() {
    var message = "";
    if (!$("#idName").val()) {
      message += "- Name is required. \n";
    }
    if(!$("#selCountry").val()) {
      message += "- Country is required. \n";
    }
    if(!$("input[type='radio']:checked").val()) {
      message += "- Gender is required.\n";
    }
    if(!$("input[type='checkbox']:checked")) {
      message += "- At least one color is required.\n";
    }
    if(!$("#idPhone").val()) {
      message += "- Phone is required.\n";
    }
    if(!$("#idEmail").val()) {
      message += "- Email is required.\n";
    }
    if(!$("#idPwd").val()) {
      message += "- Password is required.\n";
    }
    console.log(message);
    $("#alertBox").text(message);
    return false;
  
  });
});
