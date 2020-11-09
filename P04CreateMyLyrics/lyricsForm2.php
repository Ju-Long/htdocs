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
        <h1>Create Your Lyrics</h1><br>
        <hr>
        <form action="showLyrics.php" method="post">
            <?php
            $noOfVerse = $_POST['noofverse'];
            
            for($i = 1; $i <= $noOfVerse; $i++) {
                echo "Create verse ". $i. ":";
                ?>
            <select name="starting[]">
                <option value='i want'>I want</option>
                <option value="i'd like to">I'd like to</option>
                <option value="let's do">Let's do</option>
            </select>
            <input type="text" name='message[]'/><br>
            <?php                   
            }
            ?>
            Additional word for verses: <br>
            <input type="checkbox" name='yeah' value="yeah"> Yeah
            <input type="checkbox" name='great' value='great'> Great
            <br><br>
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>