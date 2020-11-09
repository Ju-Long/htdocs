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
$resultInsert = mysqli_query($link, $queryInsert) or
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
        </h3>
        <?php
        echo "Title: ". $theTitle;
        echo "Number of Pages: ". $thePages;
        echo "Quantity: ". $theQuantity;
        echo "Rent price: ". $theRent;
        ?>
        <br>
        <?php echo $message ?>
    </body>
</html>
