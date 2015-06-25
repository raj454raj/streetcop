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
        window.onload = function() {
                    var myLatLng = new google.maps.LatLng(22.3, 73.2);
                    var mapOptions = {
                            center: myLatLng,
                            zoom: 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            minZoom: 3,
                            maxZoom: 15
                        };
                        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                        marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map
                        });
                        google.maps.event.addListener(map, 'click', function (e) {
                            document.getElementById("icon_lat").value = e.latLng.lat().toFixed(6);
                            document.getElementById("icon_lon").value = e.latLng.lng().toFixed(6);
                            myLatLng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
                            marker.setPosition(myLatLng);
                        });
            }
        $(document).ready(function() {
            $("#dvMap").bind("click", function() {
                $('#icon_lat, #icon_lon').trigger("click");
                $('#icon_lat, #icon_lon').trigger("focus");
                
            });
        });
    </script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

</head>
<body>
  <?php
    include 'header.php';
  ?>
   <div class="section">

            <div class="row">
              <div class="col s12 center">
                <h3><i class="mdi-image-portrait"></i></h3>
                <h4>Register as a user</h4>
                <h5></h5>
                <br/>
                <div class="row">
                  <form class="col s12" method="POST" action="user_reg.php" id="contact-form">
                    <div class="row">
                      <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" name="name" type="text" class="validate" required>
                        <label for="icon_prefix">Name</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="icon_email" name="email" type="email" class="validate" required>
                        <label for="icon_email">Email</label>
                      </div>
                   </div>
                   <div class="row">
                      <div class="input-field col s6">
                        <i class="mdi-editor-format-quote prefix"></i>
                        <input id="username" name="username" type="text" class="validate" required>
                        <label for="username">Username</label>
                      </div>
                      <div class="input-field col s6">
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

		<script src="jquery.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
</body>
</html>
