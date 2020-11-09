<!DOCTYPE html>
<?php
//db connection parameters 
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

// open connection
$link = mysqli_connect($host, $username, $password, $db);
if(!$link) {
    die("Could not connect: " . mysqli_connect_error($link));
}

$queryBooks = "SELECT title as title, c.name as category, pages, qty, rent_price
               FROM books b, book_categories c 
               ORDER BY 2";

$resultBooks = mysqli_query($link, $queryBooks);

mysqli_close($link);

while ($row = mysqli_fetch_array($resultBooks)) {
    $arrResult[] = $row;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2 {
                font: bold;
                font-size: 24;
            }
            table {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                text-align: left;
            }
            tr:nth-child(even) {background: lightgreen}
            tr:nth-child(odd) {background: lightyellow}
        </style>
    </head>
    <body>
        
        <h3>
            <a href="bookList.php">View Book List</a>|
            <a href="insertBook.php">Insert a New Book</a>|
            <a href="searchBook.php">Search Books</a>
        </h3><br>

        <table border="1">  
        <h2>Books to Rent</h2>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Pages</th>
                <th>Quantity</th>
                <th>Rent Price</th>
            </tr>
            <?php
            for($i = 0; $i < count($arrResult); $i++) {
                ?>
            <tr>
            <td><?php echo $arrResult[$i]['title']; ?></td>
            <td><?php echo $arrResult[$i]['name']; ?></td>
            <td><?php echo $arrResult[$i]['pages']; ?></td>
            <td><?php echo $arrResult[$i]['qty']; ?></td>
            <td><?php echo $arrResult[$i]['rent_price']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>