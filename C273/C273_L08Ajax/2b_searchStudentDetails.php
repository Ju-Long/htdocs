<?php
include("dbFunctions.php");

$student = array();
$query = "SELECT * FROM student order by student_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $student[] = $row;
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
        <script>
            $(document).ready(function () {
              const data = <?php echo json_encode($student);?>;
                $("#idStudent").change(function() {
                  var selected = $(this).val();
                  console.log(selected);
                  data.forEach(i => {
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
            <label for="idStudent">Select Student ID:</label>
            <select id="idStudent" class="form-control-sm">
                <option value="">Please select</option>
                <?php
                for ($i = 0; $i < count($student); $i++) {
                    ?>
                    <option value="<?php echo $student[$i]['student_id']; ?>"><?php echo $student[$i]['student_id']; ?></option>
                <?php } ?>
            </select>
            <br/><br/>
            <div class="row">
                <div class="col-md-3">Student ID:</div>
                <div class="col-md-9 studentid"></div>
                <div class="col-md-3">First Name:</div>
                <div class="col-md-9 firstname"></div>
                <div class="col-md-3">Last Name:</div>
                <div class="col-md-9 lastname"></div>
            </div>
        </div>
    </body>
</html>
