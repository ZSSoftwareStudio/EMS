<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    
    setcookie("admin", $email, time() + (86400 * 365), '/');
    header("location: dashboard.php");
  }else{
      header("location: login.php");
  }
?>