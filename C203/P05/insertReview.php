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
        <h1>Insert Restaurant Review</h1><br><br>
        <form method="post" action="doInsertReview.php">
            Name: <select name="name" required>
                <option value="1" selected> Our Place At Three-West</option>
                <option value="2">Great Mouse Cook</option>
                <option value="3">Fine Chicken Corner</option>
            </select><br>
            
            Your Rating: 
            <input type="radio" name='rating' value='1'>1
            <input type='radio' name='rating' value='2'>2
            <input type='radio' name='rating' value='3'>3
            <input type='radio' name='rating' value='4'>4
            <input type='radio' name='rating' value='5' checked>5
            <br/>
            
            Comment: <textarea name='comment'row='4' cols="30"></textarea>
            <br>
            <input type="submit" value="Add Review"/>
        </form>
    </body>
</html>
