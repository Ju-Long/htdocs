<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/storyTellerStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Story Teller - Register</title>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <h3>Story Teller - Register</h3>
        <div id="register">
            <form method="post" action="doRegister.php" id="postform">
                <label>First Name:</label>
                <input type="text" name="firstName">

                <label>Last Name:</label>
                <input type="text" name="lastName">

                <label>Email:</label>
                <input type="text" name="email">

                <label>Username:</label>
                <input type="text" name="username">

                <label>Password:</label>
                <input type="password" name="password">

                <input type="submit" value="Register">
            </form>
        </div>
    </body>
</html>

