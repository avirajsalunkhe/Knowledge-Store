<?php
include '../dbconnection.php';
$id = $_GET['bnumber'];

$querie ="DELETE from book_data where bnumber='$id'";
    
    $query_run = mysqli_query($conn,$querie);
    if($query_run)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Data Deleted successfully....");location="book_table.php"';
        echo '</script>';
        //header(sleep(3),'location:book_table.php');
       
       
    }else{
        echo '<script type="text/javascript">';
        echo ' alert("Data not Deleted....")';
        echo '</script>';
    }
?>