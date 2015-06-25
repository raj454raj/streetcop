<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <title>StreetCop</title>

        <!-- CSS  -->
          <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  
   <?php
    include 'header.php';
    session_start();
    if(!isset($_SESSION['person'])) {
      header("Location: http://localhost/hitlist/login.php");
    }
  
   ?>
   <div id="contact" class="container">
          <div class="section">

            <div class="row">
              <div class="col s12 center">
                <h3><i class="mdi-content-send"></i></h3>
                <h4>Reportings</h4>
                <br/>
              </div>
            </div>
            <table class="table centered">
            <thead>
              <tr>
                <th data-field="plateno">Plate Number</th>
                <th data-field="norep">Number of reportings</th>
                <th data-field="action">Action</th>
              </tr>
            </thead>
            <?php
                include 'confidential.php';
                $res = $conn->query("SELECT id, plateno, COUNT(*) AS tmpcount FROM `case` GROUP BY plateno");
                while($row = $res->fetch_assoc()) {
                  echo "<tr><td>".$row['plateno']."</td><td>".$row['tmpcount']."</td><td><a href='action_taken.php?plateno=".$row['plateno']."' class=\"btn-floating btn-large waves-effect waves-light blue\"><i class=\"mdi-action-done\"></i>Report Filed</a></td><td><a href='view_users.php?plateno=".$row['plateno']."' class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"mdi-action-visibility\"></i>View Complainees</a></td></tr>";
                }
            ?>
            </table>

          </div>
		<script src="jquery.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        
</body>
</html>
