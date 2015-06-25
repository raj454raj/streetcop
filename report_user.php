<?php
		session_start();
		include 'confidential.php';
		print_r($_SESSION);
		$sql = "INSERT INTO `case` (plateno, description, latitude, longitude, user_id) VALUES ('".$_POST['report-number-plate']."', '".$_POST['report-message']."', '".$_POST['report-lat']."', '".$_POST['report-lon']."', ".$_SESSION['person_id'].");";
		echo $sql;
		if($conn->query($sql)) {
			header("Location: http://localhost/hitlist/report.php");
        	die();
		}
		else {
			echo "something bad happened";
		}
?>
