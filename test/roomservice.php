<?php
$item = $_GET['item'];
?>

<html>
    <body>
        <form action="doOrder.php" method="post">
        <?php if ($item === "perfume") { ?>
        Item name <input placeholder="Include brand in name" id="item">
        <?php } else { ?>
        Item name <input placeholder="Name" id="item">
        <?php } ?>
        <input type="submit" value="Submit" />
        </form>
    </body>
</html>