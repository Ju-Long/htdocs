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
        <form action="showFruits2.php" method="post">
            <?php
            $noOfFrutis = $_POST['nofruits'];
        
            for($i = 1; $i <= $noOfFrutis; $i++) {
                echo "Fruit".$i;
            ?>  
            <input type="text" name="fruitname[]"><br><br>
            <?php
            }
            ?>
            <input type="submit" value="Go" />
        </form>
    </body>
</html>
