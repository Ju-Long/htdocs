<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheets/problemStylesheet.css">
    </head>
    <body>
        <form name="frmContant" method="post" action="doContact.php">
            
            <h1>Contact Form :</h1>
            
            <div id="inputs">
            Your name: <input id="idName" type="text" name="name" />
            <br/>
            Email Address: <input id="idEmail" type="email" name="email" />
            <br/>
            Subject:<input id="idSubject" type="text" name="subject" />
            <br/>
            </div>
            
            <div id="textareas">
            Message:
            <br/>
            <textarea id="idFeedback" rows="8" cols="20" name="feedback"></textarea>
            <br/><br/>
            </div>
            <br>
            
            <input type="submit" value="Submit Form" />

        </form>
    </body>
</html>