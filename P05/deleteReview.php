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
        <h1>Delete Restaurant Review</h1><br>
        <form method="post" action="doDeleteReview.php">
            Restaurants: <select name='name'>
                <option value="1" selected> Our Place At Three-West</option>
                <option value="2">Great Mouse Cook</option>
                <option value="3">Fine Chicken Corner</option>
            </select><br><br>
            <input type="submit" value="Delete All Review for the Restaurant" name="submit" />
        </form>
    </body>
</html>
