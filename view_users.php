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
                <th data-field="name">Name</th>
                <th data-field="description">Description</th>
                <th data-field="email">Email</th>
              </tr>
            </thead>
            <?php
                include 'confidential.php';

                $sql = "SELECT u.name, c.description, u.email FROM user u INNER JOIN `case` c ON u.id = c.user_id AND c.plateno='".$_GET['plateno']."';";
                $res = $conn->query($sql);
                while($row = $res->fetch_assoc()) {
                    echo "<br/>";
                    echo "<tr><td>".$row['name']."</td><td>".$row['description']."</td><td>".$row['email']."</td></tr>";
                 }
            ?>
            </table>

          </div>
		<script src="jquery.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        
</body>
</html>
