<?php
session_start();
include "./dbFunctions.php";

$queryCate = "SELECT * FROM story_categories";
$resultCate = mysqli_query($link, $queryCate);

while ($row = mysqli_fetch_assoc($resultCate)) {
    $arrCategory[] = $row;
}

$queryStory = "SELECT title FROM stories WHERE category_id = ";
function amountOfStory($link, $queryStory) {
    $resultStory = mysqli_query($link, $queryStory);
    return mysqli_num_rows($resultStory);
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
        <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
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

        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
          display: none;
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
          <button class="tablinks" onclick="openCity(event, 'London')">London</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>

        <!-- Tab content -->
        <div id="London" class="tabcontent">
          <h3>London</h3>
          <p>London is the capital city of England.</p>
        </div>

        <div id="Paris" class="tabcontent">
          <h3>Paris</h3>
          <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>
        <!-- <?php for($i = 0; $i < count($arrCategory); $i++) {?>
        <li><a><?php echo $arrCategory[$i]['name'];?></a></li>
        <?php } ?> -->
    </body>
</html>
