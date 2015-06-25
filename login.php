<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <title>StreetCop</title>

        <!-- CSS  -->
          <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script type="text/javascript" src="jquery.js"></script>
<script>
         $(document).ready(function() {
            $("#dvMap").bind("click", function() {
                $('#lat, #lon').trigger("click");
                $('#lat, #lon').trigger("focus");
            });
        });
    </script>

</head>
<body>
   <?php
      include 'header.php';
      session_start();
      if(isset($_SESSION['person'])) {
        if($_SESSION['person'] == "police")
          header("Location: http://localhost/hitlist/show.php");
        else
          header("Location: http://localhost/hitlist/report.php");


      }
   ?>
   <div id="contact" class="container">
          <div class="section">

            <div class="row">
              <div class="col s12 center">
                <h3><i class="mdi-content-send"></i></h3>
                <h4>Login</h4>
                <br/>
                <div class="row">
                  <form class="col s12" method="POST" action="handle_login.php" id="contact-form">
                    <div class="row">
                      <div class="input-field ">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" name="username" type="text" class="validate" required>
                        <label for="icon_prefix">Username</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field ">
                        <i class="mdi-communication-vpn-key prefix"></i>
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                      </div>
                    </div>
                    </div>
                  </div>
                </form>
                <div class="row center">
                  <button class="btn waves-effect waves-light" type="submit" form="contact-form">Submit <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </div>

          </div>
		<script src="jquery.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
</body>
</html>
