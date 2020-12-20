<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
      header("location: dashboard.php");
  }else{
      header("location: login.php");
  }
?>