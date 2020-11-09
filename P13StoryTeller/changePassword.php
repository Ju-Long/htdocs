<?php 
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Change Password</title>
        
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

        <style>
           #error_msg{color:red; font-weight:bold;}
        </style>

        <script>
           $(document).ready(function(){
               var $submitBtn = $("#form input[type='submit']");
               var $passwordBox = $("#password");
               var $confirmBox = $("#confirm_password");
               var $errorMsg =  $('<span id="error_msg">Passwords do not match.</span>');

               // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
               $submitBtn.removeAttr("disabled");

               function checkMatchingPasswords(){
                   if($confirmBox.val() != "" && $passwordBox.val != ""){
                       if( $confirmBox.val() != $passwordBox.val() ){
                           $submitBtn.attr("disabled", "disabled");
                           $errorMsg.insertAfter($confirmBox);
                       }
                   }
               }

               function resetPasswordError(){
                   $submitBtn.removeAttr("disabled");
                   var $errorCont = $("#error_msg");
                   if($errorCont.length > 0){
                       $errorCont.remove();
                   }  
               }


               $("#confirm_password, #password")
                    .on("keydown", function(e){
                       /* only check when the tab or enter keys are pressed
                        * to prevent the method from being called needlessly  */
                       if(e.keyCode == 13 || e.keyCode == 9) {
                           checkMatchingPasswords();
                       }
                    })
                    .on("blur", function(){                    
                       // also check when the element looses focus (clicks somewhere else)
                       checkMatchingPasswords();
                   })
                   .on("focus", function(){
                       // reset the error message when they go to make a change
                       resetPasswordError();
                   })

           });
         </script>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Change Password</h3>
        
        <div id="changePassword">
            <form id="form" name="form" method="post" action="doChangePassword.php"> 
                <label> Old Password: </label>
                <input name="oldPassword" type="text" /><br/>

                <label> New Password: </label> 
                <input name="newPassword" id="password" type="password" /><br/>

                <label>Confirm Password:</label>
                <input type="password" name="confirmPassword" id="confirm_password" /><br/>

                <input type="submit" name="submit"  value="registration"  />
            </form>
        </div>
    </body>
</html>

