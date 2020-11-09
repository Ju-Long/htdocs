<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="showBottles.php" method="post">
            <?php
            $nobottle = $_POST['nobottle'];
            
            for($i = 1; $i <= $nobottle; $i++) {
                echo "Colour ". $i;
                ?>
            <select name="colour[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
            </select>
            <?php
            echo "Action ". $i;
            ?>
            <input type="text" name="action[]"/>
            <br><br>
            <?php
            }
            ?>
            <input type="submit" value="Go" />
        </form>
    </body>
</html>

