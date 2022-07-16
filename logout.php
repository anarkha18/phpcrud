<?php
session_start();
$_SESSION['users_id']=NULL;
session_destroy();
header('location:login.php');
?>