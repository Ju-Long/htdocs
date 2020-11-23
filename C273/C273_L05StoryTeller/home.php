<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Home</title>
        <style media="screen">
          img {
            width: 100%;
            height:500px;
          }
        </style>
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/Desert.jpg">
            </div>
            <div class="carousel-item">
              <img src="images/oneAfternoon.jpg">
            </div>
            <div class="carousel-item">
              <img src="images/goodLesson.jpg">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    </body>
</html>
