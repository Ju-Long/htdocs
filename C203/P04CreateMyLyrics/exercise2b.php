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
        <form action="doExercise2b.php" method="post">
            <label for="idReps">Enter repetition</label>
            <input type="number" id="idReps" name="reps" />
            <br/><br/>
            Select chess to repeat:
            <input type="radio" name="chess" value="9818"/>&#9818;
            <input type="radio" name="chess" value="9819"/>&#9819;
            <input type="radio" name="chess" value="9820"/>&#9820;
            <input type="radio" name="chess" value="9822"/>&#9822;
            <br/><br/>
            <input type="submit" value="Go"/>
        </form>
    </body>
</html>
