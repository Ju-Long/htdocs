<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/all.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Story Teller<i class="fas fa-book-open" style="margin-left: 5px"></i></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
          Maintain Story
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="storySummary.php">Story List</a>
          <?php if(isset($_SESSION['user_id'])) {?>
            <a class="dropdown-item" href="#">Add New Story</a>
          <?php }?>
        </div>
      </li>

      <li class="nav-item">
        <?php if(isset($_SESSION['user_id'])) {?>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php } else {?>
          <a class="nav-link" href="login.php">Login</a>
        <?php }?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <?php if (isset($_SESSION['user_id'])) {
        echo "<i class='text-white'>Welcome ". $_SESSION['firstname']. " ". $_SESSION['lastname']. " (". $_SESSION['role']. ")</i>";
    }
    ?>
    <div class="form-inline ml-auto">
      <input class="form-control" style="margin-right: 5px" type="search" placeholder="Search">
      <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i>Search</button>
    </div>
  </div>
</nav>
