<?php
include 'admin_index.php';
include '../dbconnection.php';


$query= "select * from all_user_images ";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
  transition: 0.3s;
  width: 18%;
  margin:30px;
  padding-bottom: 26px;
  display: inline-block;
  border-radius:15px;
}
h2{
    margin-top:30px;
    margin-bottom:50px;
    margin-left:20px;
}
.card:hover {
  box-shadow: 0 10px 20px 0 rgba(0,0,0,0.8);
}
.img2{
    border:1px solid #000;
    border-radius:15px;
    height:200px;
}
.container {
  padding: 2px 16px;
}
#alludata{
    margin-left:90%;
   
    position:fixed;
}
.ud{
    display: block;
    
    margin-top:-3%;
}
.btn-primary{
  margin-left: 33px;
}
</style>
</head>
<body>

<h2>All Student Profiles</h2>
<div class="ud">
<a href="student_table.php" id="alludata" class="btn2" style="text-decoration:none"><button class="btn btn-primary"> Back</button></a>
</div>
<?php
   while($rows = mysqli_fetch_assoc($result))
   {
       ?>
<div class="card">
  <?php echo '<img class="img2" src="data:image;base64,'.base64_encode($rows['uimg']).'" alt="Image" style="width:100%;  >';?>
  <div class="container">
    <h4>Student E-mail ID</h4> 
    <p><a href="mailto:<?php echo $rows['eid'];?>"><?php echo $rows['eid'];?></a></p>
    <a href="page_admin.php?eid=<?php echo $rows['eid'];?>"  style="text-decoration:none"><button class="btn btn-primary">Generate Student ID-card</button> </a>
  </div>
</div>
<?php
   }?>
</body>
</html> 
