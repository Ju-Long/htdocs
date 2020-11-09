<!DOCTYPE html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$link = mysqli_connect($host, $username, $password, $db);

$queryCategory = "SELECT * FROM book_categories";

$resultCategory = mysqli_query($link, $queryCategory);

while ($row = mysqli_fetch_array($resultCategory)) {
    $arrCategory[] = $row;
}
mysqli_close($link);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Book Rental</title>
    </head>
    <body>
        <h3>
            <a href="bookList.php">View Book List</a>|
            <a href="insertBook.php">Insert a New Book</a>
        </h3><br>
        <h2>Insert a New Book</h2>
        <form method="post" action="doInsertBook.php">
            <table>
                <tr>
                    <td width="40"><label for="idTitle">Title:</label></td>
                    <td><input type="text" id="idTitle" name="title" size="40" /></td>
                </tr>
                <tr>
                    <td><label for="idCat">Category:</label></td>
                    <td>
                        <select id="idCat" name="category">
                             <?php
                            for ($i = 0; $i < count($arrCategory); $i++) {
                            ?>
                            <option value="<?php echo $arrCategory[$i]['c_id']; ?>">
                                <?php echo $arrCategory[$i]['name'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idPages">Number of pages:</label>
                    </td>
                    <td>
                        <input type="text" id="idPages" name="pages" size="10" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idQty">Quantity:</label>
                    </td>
                    <td>
                        <input type="text" id="idQty" name="quantity" size="10"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idRent">Rent Price:</label>
                    </td>
                    <td>
                        <input type="text" id="idRent" name="rent" size="10"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
