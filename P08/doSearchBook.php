<?php
$theSearch = $_POST['search'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$link = mysqli_connect($host, $username, $password, $db);
if(!$link) {
    die("Could not connect: " . mysqli_connect_error($link));
}

$querySearch = "SELECT title as title, c.name as category, pages, qty, rent_price
               FROM books b, book_categories c 
               WHERE b.c_id = c.c_id and b.title LIKE '%$theSearch%' 
               ORDER BY 2";

$resultSearch = mysqli_query($link, $querySearch);

mysqli_close($link);

while ($row = mysqli_fetch_array($resultSearch)) {
    $arrResult[] = $row;
}

?>
<html>
    <head>
        <style>
            table{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        
        <h3>
            <a href="bookList.php">View Book List</a>|
            <a href="insertBook.php">Insert a New Book</a>
            <a href="searchBook.php">Search Books</a>
        </h3><br>
        
        <table border="1">  
            <h2>Search Books - Title containing '<?php echo $theSearch ?></h2>
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
                <td><?php echo $arrResult[$i]['category']; ?></td>
                <td><?php echo $arrResult[$i]['pages']; ?></td>
                <td><?php echo $arrResult[$i]['qty']; ?></td>
                <td><?php echo $arrResult[$i]['rent_price']; ?></td>
                </tr>
                <?php } ?>
            </table>
    </body>
</html>