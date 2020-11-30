<!DOCTYPE html>
<html>

<head>
  <title>Give Feedback</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel='stylesheet' href="css/all.min.css">
  <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="js/additional-methods.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui.min.js" type="text/javascript"></script>
  <script src="js/jquery.raty.min.js" type="text/javascript"></script>
  <style>
    form .error {
      color: #ff0000;
    }
  </style>
  <script type="text/javascript" src="js/areas.js"></script>
  <script>
    $(document).ready(function() {
      $("#id_area").autocomplete({
        source: areas
      });
      $('#id_last_visit').datepicker({
          dateFormat: "dd/mm/yy",
          minDate: "-2M",
          maxDate: 0,
          maxViewMode: 1,
          clearBtn: true,
          orientation: "bottom auto",
          multidate: false,
          forceParse: false,
          autoclose: true,
          todayHighlight: true
      });
      $("#id_num").slider({
        value: 0,
        min: 0,
        max: 20,
        step: 1,
        slide: function(event, ui) {
          $("#num").val(ui.value);
        }
      });
      $("#num").val($("#id_num").slider("value"));

      $.fn.raty.defaults.path = 'js/img';

      $('#stars').raty({
        cancel: false,
        scoreName: 'rate_us',
        number: 5, //change to 5
        score: 5
      });
      $("#rating").val($("#stars").raty("score"));

      $("form").validate({
        rules: {
          visitor_name: {
            required: true,
            pattern: /^[0-9a-zA-Z._ ]{2,}$/
          },
          email: {
            required: true
          },
          area: {
            required: true,
            pattern: /^[a-zA-Z ]{1,}$/
          },
          last_visit: {
            required: true
          },
          visitor_comments: {
            required: true,
            pattern: /^[a-zA-Z0-9.,_ ]{0,200}$/
          }
        },
        messages: {
          visitor_name: {
            required: "Please enter your name"
          },
          area: {
            required: "Please enter your area"
          },
          last_visit: {
            required: "Please enter your last visit"
          },
          visitor_comments: {
            required: "Please enter your comments and maximum 200 characters."
          }
        },
        submitHandler: function() {
          return true;
        }
      });
    });
  </script>
</head>

<body>
  <?php
        include("navbar.php");
        ?>
  <div class="container">
    <h3>Light Central Library was opened on 4 February 2013<br />
      Please help us improve by sharing your feedback!<br />
    </h3>
    <form id="defaultForm" action="doFeedback.php" method="post">
      <div class="form-group">
        <label for="id_name">Name:</label>
        <input type="text" class="form-control" id="id_name" name="visitor_name" required>
      </div>
      <div class="form-group">
        <label for="id_email">Email:</label>
        <input type="email" class="form-control" id="id_email" name="email" required>
      </div>
      <div class="form-group">
        <label for="id_area">Area:</label>
        <input type="text" class="form-control" id="id_area" name="area">
      </div>
      <div class="form-group">
        <label for="id_last_visit">Last Visit:</label>
        <input id="id_last_visit" type="text" class="form-control" name="last_visit">
      </div>
      <div class="form-group">
        <label for="id_num">Average <input type="text" name="num" id="num" readonly style="border:0; color:#f6931f; font-weight:bold; text-align:center" size="1"> books borrowed per visit</label>
        <div id="id_num"></div>
      </div>
      <div class="form-group">
        <div id="stars">
        <input id="rating" type="hidden" name="rating">
      </div>
      <div class="form-group">
        <label for="id_comments">Comments:</label>
        <textarea id="id_comments" class="form-control" name="visitor_comments" rows="5" cols="20"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</body>

</html>
