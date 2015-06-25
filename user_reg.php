<?php
		include 'confidential.php';
		$sql = "INSERT INTO user (name, email, username, password) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."');";
		if($conn->query($sql)) {
			echo "Done";
			header("Location: http://localhost/hitlist");
        	die();
		}
		else {
			echo "something bad happened";
		}
?>

