<?php
include '../dbconnection.php';
$id = $_GET['eid'];

$querie ="DELETE from student_data where eid='$id';";
$querie1="DELETE from all_user_images where eid='$id'";
    $query_run = mysqli_query($conn,$querie);
    $query_run1 = mysqli_query($conn,$querie1);
    if($query_run and $query_run1)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Data Deleted successfully....");location="student_table.php"';
        echo '</script>';
       
       
    }else{
        echo '<script type="text/javascript">';
        echo ' alert("Data not Deleted....")';
        echo '</script>';
    }
?>