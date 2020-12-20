<?php
    if(!isset($_COOKIE['admin'])){
        header('location: login.php');
    }else{
        header('location: dashboard.php');
    }
?>