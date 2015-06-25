<?php
$servername = "localhost";
$username = "root";
$password = "yourRootPassword";
$my_db = "hitlistdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $my_db);

// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
?>
