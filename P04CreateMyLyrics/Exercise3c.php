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
        <form action="doExercise3c.php" method="post">
            bottle 1:
            <select name ="bottle[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
            </select>

            <br/><br/>
            bottle 2:
            <select name ="bottle[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
            </select>

            <br/><br/>
            bottle 3:
            <select name ="bottle[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
            </select>

            <br/><br/>
            <input type="submit" value="Go"/>
        </form>           
    </body>
</html>