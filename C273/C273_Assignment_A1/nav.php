<nav class="navbar navbar-expand-md navbar-light bg-light">
  <img id="logo" class="navbar-brand" src="./img/skh_logo.png" onclick="directToHome()"/>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['user'])) {?>
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>

    <?php } else {?>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    <?php }?>
    </ul>

  </div>
</nav>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style media="screen">
  #logo {
    width: 11%;
    cursor: pointer;
    margin-left: 20px;
    margin-right: 20px;
  }
</style>

<script type="text/javascript">
  function directToHome() {
    location.replace("index.php")
  }
</script>
