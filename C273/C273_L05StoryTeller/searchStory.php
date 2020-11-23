<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Search for Stories</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Search for Stories</h3>

        <div id="login">
            <form method="get" action="doSearchStories.php" id="postform">
                <label>Story content contains:</label>
                <input type="text" name="title"/>
                <input type="submit" value="Search for Stories" />
            </form>
        </div>
    </body>
</html>
