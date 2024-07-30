<?php
session_start();
unset($_SESSION['admin_logged_in']);
header ('location:../common_webpage/home.php');
?>
