<?php
include("dbFunctions.php");

$limit = 5;//the number of rows to display per page

$query = "SELECT count(*) FROM posts";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);
$totalRows = $row[0];

$numPages = ceil($totalRows / $limit); //round up integer
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
              getPosts(1);
              $(".page-link").click(function() {
                $(".active").removeClass('active');
                $(this).addClass('active');
                getPosts($(this).html());
              })
            });
            function getPosts(page) {
              $.get("getPostsByPage.php", {
                page: page,
                limit: 5
              }, function(data){
                var msg = "";
                data.forEach(i => {
                  msg += "<tr><td>" + i.title + "</td><td>" + i.content + "</td></tr>"
                });
                $("tbody").html(msg);
              }, "json");
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h3>Bootstrap Pagination AJAX Example</h3>
            <table class="table table-striped">
                <thead>
                    <tr><th>Title</th><th>Content</th></tr>
                </thead>
                <tbody></tbody>
            </table>
            <nav>
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $numPages; $i++) { ?>
                        <li class="page-item"><a class="page-link" href="#"><?php echo $i ?></a></li>
                        <?php } ?>
                </ul>
            </nav>
        </div>
    </body>
</html>
