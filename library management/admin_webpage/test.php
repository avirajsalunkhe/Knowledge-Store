<?php
include '../dbconnection.php';
$query= "select * from student_data ";
$result = mysqli_query($conn,$query);
$mob = Array();
$i=0;
while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
   $mob[$i]=$rows['eid'];
   $i++;
}
foreach($mob as $k)
{
   echo $k."<br>";
}





