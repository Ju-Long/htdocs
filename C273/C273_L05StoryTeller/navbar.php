<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/all.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<div id="menu">
  <nav class="navbar navbar-expend-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Story Teller<i class="fas fa-book-open" style="margin-left: 5px"></i></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="searchStory.php">Search Story</a></li>
          <?php
          if (isset($_SESSION['user_id'])) {
              if ($_SESSION['role'] === "admin") { ?>
              <li class="nav-item"><a class="nav-link" href="storySummary.php">Story Summary</a></li>
          <?php
              } else { ?>
              <li class="nav-item"><a class="nav-link" href="addStory.php">Add New Story</a></li>
          <?php } ?>
              <li class="nav-item"><a class="nav-link" href="changePassword.php">Change Password</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
          <?php
          } else { ?>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <?php } ?>
      </ul>
      <?php if (isset($_SESSION['user_id'])) {
          echo "<i class='mr-auto'>Welcome ". $_SESSION['firstname']. " ". $_SESSION['lastname']. " (". $_SESSION['role']. ")</i>";
      }
      ?>
      <div class="form-inline ml-auto">
        <input class="form-control" style="margin-right: 5px" type="search" placeholder="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i>Search</button>
      </div>
  </div>
  </nav>
</div>
