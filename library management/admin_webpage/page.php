<?php
session_start();
include '../dbconnection.php';
 $id = $_SESSION['generate_pdf'];
// $id = "swayamgunjal2@gmail.com";
// echo $id;
$query = "SELECT * from admin_data where eid = '$id'";
     $resulta = mysqli_query($conn,$query);
     while($rows = mysqli_fetch_assoc($resulta))
     {
        $querys = "SELECT * from all_admin_images where eid = '$id'";
     $results = mysqli_query($conn,$querys);
     while($row = mysqli_fetch_array($results))
     {      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Times New Roman', Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      width: 100%;
    }
    
.card {
  position:static;
  width: 300px;
  height: 470px;
  /* background: linear-gradient(#e76cca, #ffffff 45%, #fff 45%, #eab2b2 100%); */
  /* background: #fff; */
  border-radius: 10px;
  margin-top: 10px;
  /* background: rgba(255, 255, 255, 0.1); */
  border: 1px solid rgba(64, 64, 64, 0.5);
  backdrop-filter: blur(15px);
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
  margin-left: 20px;
}

.img-bx {
  position: absolute;
  top: 89px;
  left: 0;
  margin-top: 19px;
  margin-left: -30px;
  width: 360px;
  height: 440px;
  border-radius: 10px;
  overflow: hidden;
  transform: translateY(30px) scale(0.5);
  transform-origin: top;
}

.img-bx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content {
  position: absolute;
  width: 300px;
  height: 370px;
  display: flex;
  /* margin-top: 240px; */
  justify-content: center;
  align-items: flex-end;
  padding-bottom: 30px;
}

.content .detail {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px;
  flex-direction: column;
  text-align: center;
}

.content .detail h2 {
  color: #444;
  font-size: 1.6em;
  /* margin: 10px; */
  font-weight: bolder;
}

.content .detail span {
  font-size: 0.7em;
  /* margin: 10px; */
  color: #ff0000;
  font-weight: bold;
}

.sci {
  position: relative;
  display: flex;
  /* margin-top: 5px; */
}

.sci li {
  list-style: none;
  margin-left: 148px; 
}

.sci li {
  width: 15px;
  height: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: transparent;
  font-size: 1.5em;
  color: #444;
  text-decoration: none;
}
.icon{
  margin-top: 19px;
  margin-left: 10px;
  width: 60px;
  height: 60px;
}
.hes {
  display: flex;
  align-items: center;
  justify-content: center;;
  margin-top: -75px;
  margin-left: 40px;
}
.pes{
  margin-top: 5px;
  margin-left: 70px;
}
.tes{
  margin-top: 5px;
}
.bes{
  margin-left: 40px;
}
.les{
  margin-left:-150px;
}
</style>
</head>
<body >
  <div class='card' id='photo'>
    <div class='label' style="background-color:rgb(235, 143, 212); border-radius: 10px;" >
    <img class='icon' src='https://i.ibb.co/3sXRZWm/Sveri.png' alt='Sveri' />
    <center><h6 class='hes'>Shri Vitthal Education & Research Institute's <h5 class='bes'>College of Engineering And (Poly.), Pandharpur</h5></h6>
      <p class='pes' style='font-size:9px;'>P.B.No.54, Gopalpur-Ranjani Road, Gopalpur, Pandharpur-<br>413304, Dist.Solapur(Maharashtra)Tel.:776700372 E-mail:1074office@msbte.com Website: www.sveri.ac.in</p></center>
      <br><hr style='margin-bottom: 9px;'>
    </div>
    <center><h4>Library ID</h4></center>
    <div class='img-bx'>
      <center><?php echo '<img class="its_mi" src="data:image;base64,'.base64_encode($row['uimg']).'">';?></center>
    </div>
    <div class='content'>
    <div class='detail'>
        <h2><?php echo $rows['fname'];echo "\n"; echo $rows['lname'];?><br /><span><?php echo $rows['dep'];?><br /></span></h2>
        <h3>Enrollment No:- <?php echo $rows['enrno'];?></h3>
        <ul class='sci'>
          <li>
            <h6 class='les' ><span><?php echo $rows['eid'];?></span></h6>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <br>
  <br>
</body>
</html>

<?php

     }}
     ?>