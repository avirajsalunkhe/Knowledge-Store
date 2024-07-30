<?php
session_start();
unset($_SESSION['student_logged_in']);
header ('location:../common_webpage/home.php');
?>
