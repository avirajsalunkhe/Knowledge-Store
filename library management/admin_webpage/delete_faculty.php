<?php
include '../dbconnection.php';
$id = $_GET['eid'];

$querie ="DELETE from admin_data where eid='$id'";
$querie1="DELETE from all_admin_images where eid='$id'";
    $query_run = mysqli_query($conn,$querie);
    $query_run1 = mysqli_query($conn,$querie1);
    if($query_run and $query_run1)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Data Deleted successfully....");location="faculty_table.php"';
        echo '</script>';
       
       
    }else{
        echo '<script type="text/javascript">';
        echo ' alert("Data not Deleted....")';
        echo '</script>';
    }
?>