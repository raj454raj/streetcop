<head>
  <title>
    StreetCop
  </title>
</head>

<?php
  session_start();
  if(!isset($_SESSION['person'])) {
    echo "<ul id=\"dropdown1\" class=\"dropdown-content\"><li><a href=\"/hitlist/register_user.php\">As User</a></li><li class=\"divider\"></li><li><a href=\"/hitlist/register_police.php\">As Police</a></li></ul>";
  }
?>

<div class="navbar-fixed">     
<nav>
  <div class="nav-wrapper orange">
    <a href="/hitlist/index.php" class="brand-logo" style="padding-left: 1%;"><strong><b>StreetCop</b></strong></a>
    <ul class="right hide-on-med-and-down">
    <?php 
      if(!isset($_SESSION['person'])) {
          echo "<li><a href=\"/hitlist/login.php\">Login</a></li><li><a class=\"dropdown-button\" href=\"\" data-activates=\"dropdown1\">Register<i class=\"mdi-navigation-arrow-drop-down right\"></i></a></li><ul class=\"right hide-on-med-and-down\">";
      }
      else
        echo "<li><a href='/hitlist/logout.php'><b>Logout</b></a></li>"
    ?>
    </ul>
  </div>
</nav>
 </div>