<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Login</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Login</h3>
        
        <div id="login">
            <form method="post" action="doLogin.php" id="postform">
                <label>Username:</label>
                <input type="text" name="username">
                <label>Password:</label>
                <input type="password" name="password">
                <input type="submit" value="Login" />
            </form>
        </div>
    </body>
</html>
