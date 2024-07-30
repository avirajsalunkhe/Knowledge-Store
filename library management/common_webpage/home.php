<?php
require "main.php";

include '../dbconnection.php';
$query= "select * from gallery";
$result = mysqli_query($conn,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <style>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.gallery{
  margin:10px;
  margin-top:40px;
  
}
.footer{
  /* margin-top:400px; */
  position: ;
}
body {
  /* min-height: 10vh; */
  display: flex;
  flex-direction: column;
}

</style>
</head>
<body>
<div class="data">
<?php
     while($rows = mysqli_fetch_assoc($result))
   {
         ?>
  
    <div class="responsive">
        <div class="gallery" >
            <a>
            <?php echo '<img src="data:image;base64,'.base64_encode($rows['img']).'" alt="Image" style="width:350px; height:360px">';?>
                
            </a>
            <div class="desc"><?php echo $rows['iname'];?></div>
        </div>
    </div>
    <?php
   }
   ?>

  </div>
  <br><br><br>
  <center><img src="https://counter2.optistats.ovh/private/freecounterstat.php?c=6u59r3f1gfjbfa91qzxurs98kpj4abqr" border="0" title="free hit counter no ads" alt="free hit counter no ads"></center>

  <div class="footer">
  <footer>
  <center>
  <div class="copyright"> © 2023 Copyright By Sveri's College of Poly, Pandharpur. Designed and Developed By Aviraj Salunkhe & Team.<br> Under The Guidance of G.S.Misal Sir. 
   All Rights Reserved.<br>
</div>
  <a href="mailto:avirajsalunkhe1@gmail.com"><img style="width:20px; height:20px;" src="../mail.png"></img></a>
    <a href="https://www.instagram.com/its_avi_45_/"><img style="width:20px; height:20px;"src="../insta.png"></img></a>
    </p>
    </center>
</footer>
        </div>
</body>
</html>

<?php
   
?>
