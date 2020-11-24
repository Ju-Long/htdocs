<?php
include("dbFunctions.php");
// create query
$query = "SELECT * FROM books, book_categories
          WHERE books.cat_id = book_categories.id
          ORDER BY books.id";

// execute query
$result = mysqli_query($link, $query) or
        die("Error in query: $query. " . mysqli_error($link));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script>
          $(document).ready(function() {
            $("#itemTypes").change(function(){
              if ($(this).val() != 0) {
                $("tr").hide();
                $(".header").show();
                $(`.${$(this).val()}`).show();
              } else {
                $("tr").show();
              }
            });
          });
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Light Central Library: List of books</h3>
                        <form>
                <div class="form-group">
                    <label for="itemTypes">Show:</label>
                    <select id="itemTypes" class="form-control">
                        <option value="0">
                            all categories
                        </option>
                        <option value="adventure">
                            adventure
                        </option>
                        <option value="children">
                            children
                        </option>
                        <option value="food">
                            food
                        </option>
                        <option value="self-development">
                            self-development
                        </option>
                    </select>
                </div>
            </form>
            <table id="bookTable" class="table table-hover table-bordered">
                <tr class="header">
                    <th>Book Title</th>
                    <th>Pages</th>
                    <th>Category</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $num_pages = $row['pages'];
                    $category = $row['cat_name'];
                    ?>
                    <tr class="<?php echo $category; ?>">
                        <td>
                            <?php echo $title; ?>
                        </td>
                        <td>
                            <?php echo $num_pages; ?>
                        </td>
                        <td>
                            <?php echo $category; ?>
                        </td>
                    </tr>
                    <?php
                } // end while loop
                ?>
            </table>
        </div>
    </body>
</html>
