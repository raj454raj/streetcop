<?php
	$plateno = $_GET['plateno'];
	include 'confidential.php';
	$sql = "DELETE FROM `case` WHERE plateno='".$plateno."'";
	$res = $conn->query($sql);
	if ($res) {
		header("Location: http://localhost/hitlist/show.php");
        die();
	}
?>