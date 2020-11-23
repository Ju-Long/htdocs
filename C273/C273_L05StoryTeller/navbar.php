<div id="menu">
    <ul>
        <li> <a href="index.php">Home</a></li>
        <li><a href="searchStory.php">Search Story</a></li>
        <?php 
        if (isset($_SESSION['user_id'])) { 
            if ($_SESSION['role'] === "admin") { ?>
            <li> <a href="storySummary.php">Story Summary</a></li>
        <?php
            } else { ?>
            <li> <a href="addStory.php">Add New Story</a></li>
        <?php } ?>
            <li><a href="changePassword.php">Change Password</a></li>
            <li> <a href="logout.php">logout</a></li>
        <?php 
        } else { ?>
            <li> <a href="login.php">Login</a></li>
            <li> <a href="register.php">Register</a></li>
        <?php } ?>
    </ul>
</div>
<?php if (isset($_SESSION['user_id'])) { 
    echo "<i>Welcome ". $_SESSION['firstname']. " ". $_SESSION['lastname']. " (". $_SESSION['role']. ")</i>";
}
?>