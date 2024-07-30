<?php
include("../dbconnection.php");

$bid= $_GET['bnumber'];
$sid= $_GET['eid'];
$book1 ="SELECT book1 from student_data where eid='$sid'";
$book2 ="SELECT book2 from student_data where eid='$sid'";
$book3 ="SELECT book3 from student_data where eid='$sid'";
$book4 ="SELECT book4 from student_data where eid='$sid'";
$book5 ="SELECT book5 from student_data where eid='$sid'";
$b1 = mysqli_query($conn, $book1);
$b2 = mysqli_query($conn, $book2);
$b3 = mysqli_query($conn, $book3);
$b4 = mysqli_query($conn, $book4);
$b5 = mysqli_query($conn, $book5);
$bb1=mysqli_fetch_assoc($b1);
$bb2=mysqli_fetch_assoc($b2);
$bb3=mysqli_fetch_assoc($b3);
$bb4=mysqli_fetch_assoc($b4);
$bb5=mysqli_fetch_assoc($b5);
$new_date = date('Y-m-d');
$nextWeek = strtotime('+1 week');
$nextWeekDate = date('Y-m-d', $nextWeek);
if($bb1['book1']==$bid){
    echo '<script type="text/javascript">';
    echo " alert('Book already taken....');location='user_account.php?eid=$sid'";
    echo '</script>';
}elseif($bb2['book2']==$bid){
    echo '<script type="text/javascript">';
    echo " alert('Book already taken....');location='user_account.php?eid=$sid'";
    echo '</script>';
}elseif($bb3['book3']==$bid){
    echo '<script type="text/javascript">';
    echo " alert('Book already taken....');location='user_account.php?eid=$sid'";
    echo '</script>';
}elseif($bb4['book4']==$bid){
    echo '<script type="text/javascript">';
    echo " alert('Book already taken....');location='user_account.php?eid=$sid'";
    echo '</script>'; 
}elseif($bb5['book5']==$bid){
    echo '<script type="text/javascript">';
    echo " alert('Book already taken....');location='user_account.php?eid=$sid'";
    echo '</script>';
}
else
{
    if($bb1['book1']==0||$bb1['book1']==null){
        $query ="UPDATE  book_data set bqty=bqty -1  where bnumber = '$bid'";
        $query_run = mysqli_query($conn, $query);
             $query ="UPDATE  student_data set book1 = $bid , book1idate = '$new_date' ,book1rdate = '$nextWeekDate' where eid = '$sid'";
            $query_run = mysqli_query($conn, $query);
       if($query_run)
        {
              header ("location:user_account.php?eid=$sid");
        }
    }elseif($bb2['book2']==0||$bb2['book2']==null){
        
        $query ="UPDATE  book_data set bqty=bqty -1  where bnumber = '$bid'";
        $query_run = mysqli_query($conn, $query);
            
                $query ="UPDATE  student_data set book2 = $bid ,book2idate = '$new_date' ,book2rdate = '$nextWeekDate'  where eid = '$sid'";
                 $query_run = mysqli_query($conn, $query);
        if($query_run)
             {
              header ("location:user_account.php?eid=$sid");
             }
    }elseif($bb3['book3']==0||$bb3['book3']==null){
        $query ="UPDATE  book_data set bqty=bqty -1  where bnumber = '$bid'";
        $query_run = mysqli_query($conn, $query);
            
                $query ="UPDATE  student_data set book3 = $bid ,book3idate = '$new_date' ,book3rdate = '$nextWeekDate' where eid = '$sid'";
                $query_run = mysqli_query($conn, $query);
                if($query_run)
                    {
                       header ("location:user_account.php?eid=$sid");
                    }
    }elseif($bb4['book4']==0||$bb4['book4']==null){
        $query ="UPDATE  book_data set bqty=bqty -1  where bnumber = '$bid'";
        $query_run = mysqli_query($conn, $query);
            
                  $query ="UPDATE  student_data set book4 = $bid ,book4idate = '$new_date' ,book4rdate = '$nextWeekDate'  where eid = '$sid'";
                 $query_run = mysqli_query($conn, $query);
                if($query_run)
                    {
                        header ("location:user_account.php?eid=$sid");
                    }
    }elseif($bb5['book5']==0||$bb5['book5']==null){
        $query ="UPDATE  book_data set bqty=bqty -1  where bnumber = '$bid'";
        $query_run = mysqli_query($conn, $query);
            
                   $query ="UPDATE  student_data set book5 = $bid ,book5idate = '$new_date' ,book5rdate = '$nextWeekDate' where eid = '$sid'";
                    $query_run = mysqli_query($conn, $query);
                if($query_run)
                    {
                      header ("location:user_account.php?eid=$sid");
                    }
    }
    else
    {
        echo '<script type="text/javascript">';
       echo " alert('Book Limit Crossed....');location='user_account.php?eid=$sid'";
       echo '</script>';
    }

}

?>