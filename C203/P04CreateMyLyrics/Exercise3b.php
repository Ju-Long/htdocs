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
        <form action="doExercise3b.php" method="post">
            <label for="idCar1">Car 1</label>
            <input type="text" id="idCar1" name="cars[]" />
            <br/><br/>
            <label for="idCar2">Car 2</label>
            <input type="text" id="idCar2" name="cars[]" />
            <br/><br/>
            <label for="idCar3">Car 3</label>
            <input type="text" id="idCar3" name="cars[]" />
            <br/><br/>
            <input type="submit" value="Go"/>
        </form>
    </body>
</html>
