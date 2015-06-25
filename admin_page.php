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
   <h1>Register requests</h1>
   <?php
	include 'confidential.php';
	$sql = "SELECT * FROM police_user WHERE registration_status='pending'";
	$res = $conn->query($sql);
	echo "<table class='table centered'>";
	?>

	<thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Name</th>
              <th data-field="unique_id">Unique ID</th>
              <th data-field="action">Action</th>
          </tr>
    </thead>
	<?php
	while($row = $res->fetch_assoc()) {
		echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['unique_id']."</td><td><a href='approve_user.php?id=".$row['id']."' class=\"waves-effect waves-light btn\"><i class=\"mdi-action-done right\"></i>Approve</a></td></tr>";
	}
	echo "</table>";
	?>
   	<script src="jquery.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
</body>
</html>
