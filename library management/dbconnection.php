<?php
$conn=mysqli_connect ('localhost','root','','library_management');
if(mysqli_connect_error()){
    die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
    echo"connection error";
 } 
?>