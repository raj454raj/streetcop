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
                            document.getElementsByName("report-lat")[0].value = e.latLng.lat().toFixed(6);
                            document.getElementsByName("report-lon")[0].value = e.latLng.lng().toFixed(6);
                            myLatLng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
                            marker.setPosition(myLatLng);
                        });
            }
        $(document).ready(function() {
            $("#dvMap").bind("click", function() {
                $('#lat, #lon').trigger("click");
                $('#lat, #lon').trigger("focus");
                
            });
        });
    </script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

</head>
<body>
  <?php
    include 'header.php';
  ?>
   <div id="contact" class="container">
          <div class="section">

            <div class="row">
              <div class="col s12 center">
                <h3><i class="mdi-content-send"></i></h3>
                <h4>Report</h4>
                <h5></h5>
                <br/>
                <div class="row">
                  <form class="col s12" method="POST" action="report_user.php" id="contact-form">
                    <div class="row">
                      <div class="input-field ">
                        <i class="mdi-maps-directions-car prefix"></i>
                        <input id="icon_prefix" name="report-number-plate" type="text" class="validate" required>
                        <label for="icon_prefix">Number Plate</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-message prefix"></i>
                          <textarea id="message" name="report-message" class="materialize-textarea" required></textarea>
                          <label for="message">Description</label>
                      </div>
                      <div class="row">
                      	<div class="input-field col s6">
                      	  	<i class="mdi-maps-place prefix"></i>
                        	<input id="lat" name="report-lat" type="text" class="validate" required>
                        	<label for="lat">Latitude</label>
                      	</div>
                      	<div class="input-field col s6">
                      	  	<i class="mdi-maps-pin-drop prefix"></i>
                        	<input id="lon" name="report-lon" type="text" class="validate" required>
                        	<label for="lon">Longitude</label>
                      	</div>
                      </div>
                      <div class="row">
                      	<div class="input-field col s12">
							<div id="dvMap" style="margin-left:10%;width:800px;height:300px;" />                      	
						</div>
                      </div>
                      <br />
                      
                    </div>
                  </div>
                </form>
                <div class="row">
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
