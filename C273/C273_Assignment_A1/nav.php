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

      <li class="nav-item" id='dataDisplay'>
        <a class="nav-link" href="#">Data Display<i class="fas fa-database"></i></a>
      </li>
      <div id="tooltip" role="tooltip">
        This Shows an
        <div id="arrow" data-popper-arrow></div>
      </div>

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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/additional-methods.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.raty.min.js" type="text/javascript"></script>
<script src="js/Chart.bundle.min.js" type="text/javascript"></script>
<script src="js/moment.min.js"></script>
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

  #tooltip {
    background: #333;
    color: white;
    font-weight: bold;
    padding: 4px 8px;
    font-size: 13px;
    border-radius: 4px;
    display: none;
  }

  #tooltip[data-show] {
    display: block;
  }

  #arrow,
  #arrow::before {
    position: absolute;
    width: 8px;
    height: 8px;
    z-index: -1;
  }

  #arrow::before {
    content: '';
    transform: rotate(45deg);
    background: #333;
  }

  #tooltip[data-popper-placement^='top'] > #arrow {
    bottom: -4px;
  }

  #tooltip[data-popper-placement^='bottom'] > #arrow {
    top: -4px;
  }

  #tooltip[data-popper-placement^='left'] > #arrow {
    right: -4px;
  }

  #tooltip[data-popper-placement^='right'] > #arrow {
    left: -4px;
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

  const dataDisplay = document.querySelector('#dataDisplay');
  const tooltip = document.querySelector('#tooltip');

  let popperInstance = null;

  function create() {
   popperInstance = Popper.createPopper(dataDisplay, tooltip, {
     modifiers: [
       {
         name: 'offset',
         options: {
           offset: [0, 8],
         },
       },
     ],
   });
  }

  function destroy() {
   if (popperInstance) {
     popperInstance.destroy();
     popperInstance = null;
   }
  }

  function show() {
   tooltip.setAttribute('data-show', '');
   create();
  }

  function hide() {
   tooltip.removeAttribute('data-show');
   destroy();
  }

  const showEvents = ['mouseenter', 'focus'];
  const hideEvents = ['mouseleave', 'blur'];

  showEvents.forEach(event => {
   dataDisplay.addEventListener(event, show);
  });

  hideEvents.forEach(event => {
   dataDisplay.addEventListener(event, hide);
  });
</script>
