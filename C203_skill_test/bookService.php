<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Andy Car service booking</title>
        <link href="style/bookServiceStyleSheet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1> Andy's car Servicing Company </h1>

        <p><img src="img/Annotation 2020-08-25 201102.jpg" width="100" /></p>
        
        <br><br>
        <h3>Booking Details</h3> 

        <form method="post" action="doBookService.php">
		<!-- Enter your html form elements -->
                <label>User Name:</label>
                <input class="ju" type="text" name="user"/>
                
                <input class="ju" type="text" name="user"/>
                
                <label>Service Centre:</label>
                <select class="ju" name="centre">
                    <option name="paya_lebar">Paya Lebar</option>
                    <option name="ang_mo_kio">Ang Mo Kio</option>
                    <option name="bishan">Bishan</option>
                </select>
                
                <label>Service Date: </label>
                <input class="ju" type="date" name="service_date"/>
                
                <label>Service Request: </label>
                <textarea class="ju" name="service_request"></textarea>
                
        	<input type ="submit" value ="Book">
        </form>
    </body>
</html>
