<?php
session_start();
include './dbFunctions.php';
$query = "SELECT * FROM food";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_assoc($result)) {
  $food[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <?php include './nav.php';?>
    <script type="text/javascript">
    $(document).ready(function() {
      $("form").validate({
        rules: {
          food: {
            min: 1
          }, calorie: {
            required: true
          }, fats: {
            required: true
          }
        },
        messages: {
          food: {
            min: "Please choose food"
          }, calorie: {
            required: "Please enter the calories"
          }, fats: {
            required: "Please enter the fats"
          }
        },
        submitHandler: function() {
          return true;
        }
      });
    });

    </script>
    <div class="container">
      <form action="doMealEntry.php" method="post">

        <div class="form-group">
          <label for="food">Please Choose a Food: </label>
          <select class="form-control" name="food" id="food">
            <option value="0">----- Select a Food -----</option>
            <?php foreach ($food as $i) {?>
            <option value="<?php echo $i["id"];?>"><?php echo $i["food_name"];?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="id_calorie">Please Enter The Calories: </label>
          <input type="number" class="form-control" id="id_calorie" name="calorie"/>
        </div>

        <div class="form-group">
          <label for="id_fats">Please Enter The Fats (grams): </label>
          <input type="number" class="form-control" id="id_fats" name="fats"/>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" value="Reset"/>
      </form>
    </div>
  </body>
</html>
