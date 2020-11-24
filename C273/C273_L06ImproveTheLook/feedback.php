<!DOCTYPE html>
<html>
    <head>
        <title>Give Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Light Central Library was opened on 4 February 2013<br/>
                Please help us improve by sharing your feedback!<br/>
            </h3>
            <form id="defaultForm" action="doFeedback.php" method="post">
                <div class="form-group">
                    <label for="id_name">Name:</label>
                    <input type="text" class="form-control" id="id_name" name="visitor_name" required>
                </div>
                <div class="form-group">
                    <label for="id_area">Area:</label>
                    <input type="text" class="form-control" id="id_area" name="area">
                </div>
                <div class="form-group">
                    <label for="id_last_visit">Last Visit:</label>                      
                    <input id="id_last_visit" type="text" class="form-control" name="last_visit">                           
                </div>
                <div class="form-group">
                    <label for="id_num">Average books borrowed per visit</label>
                    <input id="id_num" type="text" class="form-control" name="num_books">
                </div>
                <div class="form-group">
                    <label for="id_rating">Rate Us:</label>
					<input type="radio" name="rate_us"/>1
					<input type="radio" name="rate_us"/>2
					<input type="radio" name="rate_us"/>3
					<input type="radio" name="rate_us"/>4
					<input type="radio" name="rate_us"/>5
                </div>
                <div class="form-group">
                    <label for="id_comments">Comments:</label>
                    <textarea id="id_comments" class="form-control" name="visitor_comments" rows="5" cols="20"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>