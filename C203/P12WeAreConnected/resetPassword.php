<?php

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>We Are Connected - Logout</h3>
        <hr />
        <form method="post" action="doResetPassword.php">
            Please enter your email:
            <input type="text" name="email"/>
        </form>
    </body>
</html>