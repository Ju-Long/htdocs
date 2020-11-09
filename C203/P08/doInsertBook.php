<!DOCTYPE html>
<?php
$theTitle = $_POST['title'];
$theCategory = $_POST['category'];
$thePages = $_POST['pages'];
$theQuantity = $_POST['quantity'];
$theRent = $_POST['rent'];

// open connection 
$host = "localhost";
$user = "root";
$pass= "";
$db = "c203_p08";

$link = mysqli_connect($host, $user, $pass, $db);

$queryInsertBook = "INSERT INTO books(c_id, title, pages, qty, rent_price)
                    VALUES($theCategory,'$theTitle', $thePages, $theQuantity, $theRent)";
$resultInsert = mysqli_query($link, $queryInsertBook) or
        die('Error querying database');

if($resultInsert) {
    $message = "Book Information Submitted Successfully";
} else {
    $message = "Book Information Submitted Failed";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h3>
            <a href="bookList.php">View Book List</a>|
            <a href="insertBook.php">Insert a New Book</a>
            <a href="searchBook.php">Search Books</a>
        </h3><br>
        
        <?php
        echo "Title: ". $theTitle . "<br>";
        echo "Number of Pages: ". $thePages . "<br>";
        echo "Quantity: ". $theQuantity . "<br>";
        echo "Rent price: ". $theRent . "<br>";
        ?>
        <br>
        <?php echo $message ?>
    </body>
</html>
