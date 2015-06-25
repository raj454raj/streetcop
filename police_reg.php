
<?php
		include 'confidential.php';
		$sql = "INSERT INTO police_user (name, latitude, longitude, unique_id, username, password) VALUES ('".$_POST['name']."', '".$_POST['latitude']."', '".$_POST['longitude']."', '".$_POST['unique_id']."', '".$_POST['username']."', '".$_POST['password']."');";
		if($conn->query($sql)) {
			echo "Done";
			header("Location: http://localhost/hitlist");
        	die();
		}
		else {
			echo "something bad happened";
		}
?>

