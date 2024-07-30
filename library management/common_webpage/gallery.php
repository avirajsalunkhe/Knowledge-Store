<?php
include 'main.php';
include '../dbconnection.php';


$query= "select * from gallery";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  background:#ffabad;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer;
  border:2px solid black;
  border-radius:10px; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 40px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
.marquee{
  background:#ffabad;
    
}
</style>
</head>
<body>

<div style="text-align:center">
  <!-- <h2></h2>
  <p>Click on the images below:</p> -->
</div>

<!-- The four columns -->
<div class="row">
    <marquee behavior="scroll" direction="left" scrollamount="10" class="marquee">
    <?php
   while($rows = mysqli_fetch_assoc($result))
   {
       ?>
  <div class="column">
  <?php echo '<img src="data:image;base64,'.base64_encode($rows['img']).'" alt="@Library" onclick="myFunction(this);" style="width:100%;  />'?>
  
  <!-- <img src="radha.jpg" width="250" height="160" onclick="myFunction(this);" /> -->
</div>
<?php
   }
   ?>
   </marquee>

</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
</html>
