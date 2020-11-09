<?php
$num = 5;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select the colour of each bottle</title>
    </head>
    <body>
        <form action="showCars.php" method="post">
            <?php
            for($i = 1; $i <= $num; $i++) {
                echo "Car $i";
                ?>
            <input type="text" name="cars[]"/>
            <br><br>
            <?php
            }
            ?>
            <input type="submit" value="Go"/>
        </form>
    </body>
</html>