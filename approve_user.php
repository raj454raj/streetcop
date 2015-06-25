<?php
  include 'confidential.php';
  $sql = "UPDATE police_user SET registration_status='confirmed' WHERE id=" . $_GET['id'];
  if($conn->query($sql)) {
    header("Location: http://localhost/hitlist/admin_page.php");
    die();
  }
  else {
    echo "Something bad happened";
  }
?>