
<html>
    <title></title>
    <body>
                
        <h3>
            <a href="bookList.php">View Book List</a>|
            <a href="insertBook.php">Insert a New Book</a>
            <a href="searchBook.php">Search Books</a>
        </h3><br>
        
        <h2 style="font: bold;">Search Books</h2>
        <br>
        <form method="post" action="doSearchBook.php">       
            Book Name contains: <input type="text" name="search" size="10">
            <br>
            <input type="submit" value="Search" />
        </form>
    </body>
</html>

