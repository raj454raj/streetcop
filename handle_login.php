<?php
	
	session_start();

	if($_POST['username'] == "admin" && $_POST["password"] == "admin") {
		session_start();
		$_SESSION['person'] = "admin";
			
		header("Location: http://localhost/hitlist/admin_page.php");
		die();  
	}
	else {
		include 'confidential.php';
		$sql = "SELECT * FROM `police_user` WHERE username='".$_POST['username']."';";
		$res = $conn->query($sql);
		while($row = $res->fetch_assoc()) {
			if($row['password'] == $_POST['password'] && $row['registration_status'] == "confirmed") {
				$_SESSION['person_id'] = $row['id'];
				$_SESSION['person'] = "police";
				header("Location: http://localhost/hitlist/show.php");
			}
			else {
				session_unset();
				session_destroy();

				echo "Invalid credentials or you are not verified by the admin";
			}
		}
		$sql = "SELECT * FROM `user` WHERE username='".$_POST['username']."'";
		$res = $conn->query($sql);
		while($row = $res->fetch_assoc()) {
			if($row['password'] == $_POST['password']) {
				$_SESSION['person_id'] = $row['id'];
				$_SESSION['person'] = "user";
				header("Location: http://localhost/hitlist/report.php");
			}
			else {
				session_unset();
				session_destroy();
				echo "Invalid credentials";
			}
		}

	}
?>