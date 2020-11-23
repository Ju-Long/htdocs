<?php
session_start();
include "./dbFunctions.php";

$queryCate = "SELECT * FROM story_categories";
$resultCate = mysqli_query($link, $queryCate);

while ($row = mysqli_fetch_assoc($resultCate)) {
    $arrCategory[] = $row;
}
?>
<html>
    <head>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
      <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Story Teller - Story Summary</title>
        <script>
        function display(value) {
          var xhttp;
          if (value == 0) {
            document.getElementById("output").innerHTML = "";
            return;
          }
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("output").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "doStorySummary.php?n="+value, true);
          xhttp.send();
        }
        </script>
        <style>
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }
        .tab button {
          background-color: inherit;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
        }
        .tab button:hover {
          background-color: #ddd;
        }
        .tab button.active {
          background-color: #ccc;
        }
        .tabcontent {
          display: block;
          padding: 6px 12px;
          border: 1px solid #ccc;
          border-top: none;
        }
        </style>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Story Summary</h3>

        <div class="tab">
          <?php for($i = 0; $i < count($arrCategory); $i++) {?>
          <button class="tablinks" onclick="display('<?php echo $arrCategory[$i]['id']?>')"><?php echo $arrCategory[$i]['name'];?></button>
          <?php } ?>
        </div>

        <div class="tabcontent" id="output"></div>
    </body>
</html>
