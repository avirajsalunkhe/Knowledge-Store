<?php
include "../dbconnection.php";
$sid = $_GET['eid'];
$book =$_GET['bcolumn'];
$sid= $_GET['eid'];
$bid= $_GET['bnumber'];
$return=$_GET['return'];
$cancel=$_GET['cancel'];
$query ="UPDATE  book_data set bqty=bqty +1  where bnumber = '$bid'";
$query_run = mysqli_query($conn, $query);
$query ="UPDATE  student_data set $book =0 ,$return = '0000-00-00',$cancel = '0000-00-00' where eid = '$sid'";
$query_run = mysqli_query($conn, $query);
if($query_run)
{
    header ("location:user_account.php?eid=$sid");
}
?>