<?php
include("dbFunctions.php");

$modules = array();

//write the php code to retrieve the data from the modules table
$modules = array();
$query = "SELECT * FROM modules order by 1";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $modules[] = $row;
}
mysqli_close($link);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
            $(document).ready(function () {
              var values = null;
                $("#idModule").change(function() {
                  $.get("./getStudentsByModule.php", {
                    module_code: $("#idModule").val()
                  }, function(data) {
                    values = data;
                    var msg;
                    data.forEach(i => {
                      msg = "<option>" + i.student_id + "</option>";
                    });
                    $('#idStudent').html(msg);
                  }, "json");
                });
                $("#idStudent").change(function() {
                  var selected = $(this).val();
                  console.log(selected);
                  values.forEach(i => {
                    if(i.student_id == selected) {
                      $(".studentid").html(i.student_id);
                      $(".firstname").html(i.first_name);
                      $(".lastname").html(i.last_name);
                    }
                  });
                });
                $("#idStudent").click(function() {
                  var selected = $(this).val();
                  console.log(selected);
                  values.forEach(i => {
                    if(i.student_id == selected) {
                      $(".studentid").html(i.student_id);
                      $(".firstname").html(i.first_name);
                      $(".lastname").html(i.last_name);
                    }
                  });
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="idModule">Select Module:</label>
                    <select id="idModule" class="form-control-sm">
                        <option value="">Please select</option>
                        <?php
                        for ($i = 0; $i < count($modules); $i++) {
                            ?>
                            <option value="<?php echo $modules[$i]['module_code']; ?>"><?php echo $modules[$i]['module_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idStudent">Select Student ID:</label>
                    <select id="idStudent" class="form-control-sm">
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">Student ID:</div>
                    <div class="col-md-9 studentid"></div>
                    <div class="col-md-3">First Name:</div>
                    <div class="col-md-9 firstname"></div>
                    <div class="col-md-3">Last Name:</div>
                    <div class="col-md-9 lastname"></div>
                </div>
            </form>
        </div>
    </body>
</html>
