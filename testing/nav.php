<?php
$named = $_POST['named'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        console.log("ready");
        $('p').html("<?php echo $named ?>");
      });
    </script>
  </head>
  <body>
    <p class='example'></p>
  </body>
</html>
