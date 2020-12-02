<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
  <img id="logo" class="navbar-brand" src="./img/skh_logo.png" onclick="directToHome()"/>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['user'])) {?>
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<i class="fas fa-home"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Meal Entry<i class="fas fa-edit"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Data Display<i class="fas fa-database"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Logout<i class="fas fa-sign-out-alt"></i></a>
      </li>

    <?php } else {?>
      <li class="nav-item">
        <a class="nav-link" href="#">Login<i class="fas fa-sign-in-alt"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign up<i class="fas fa-user-plus"></i></a>
      </li>
    <?php }?>
    </ul>

  </div>
</nav>
<link rel='stylesheet' href="css/all.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<style media="screen">
  li {
    font-size: 20;
    margin-right: 10px;
  }
  #navbarSupportedContent {
    padding-right: 50px;
  }
  i {
    margin-left: 7px;
  }
  #logo {
    width: 11%;
    cursor: pointer;
    margin-left: 20px;
    margin-right: 20px;
  }
</style>

<script type="text/javascript">
  function directToHome() {
    location.replace("index.php");
  }
  $("a").mouseover(function() {
    $(this).addClass("text-info")
  }).mouseout(function() {
    $(this).removeClass("text-info");
  });
</script>
