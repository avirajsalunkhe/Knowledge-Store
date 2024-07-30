<?php
session_start();
if(! $_SESSION['student_logged_in'])
{
     header ('location:student_login.php');
}
error_reporting(0);


?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="student_structure.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="../sveri.png" rel='icon'>
  <title>Library Management system</title>
  <style>
    

.me{
  display:none;
  cursor: pointer;
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: #333;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 11px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -11px) rotate(45deg);
}
  

@media (max-width:1200px) {

.logo,.sinfo {
  display:none;
}

.con1{
  width:120%;
}

.me{
  margin-top:2%;
  margin-left:93%;
display: block;

}
.nav{
  position: absolute;
  right:3rem;
  top:100px;
  width:250px;
  margin:10px;
  backdrop-filter: blur(15px);
  border-radius:10px;
  overflow: hidden;
  box-shadow: 0 3px 6px rgba(0,0,0,0.2);
  transition:height 0.2 cubic-bezier(0.175,0.885,0.32,1.275);
}

.nav li{
  padding:1rem;
  display: flex;
  font-size:15px;
  align-items: center;
  justify-content: center;

}
.nav .f{
  background: #fd7e14;
  width:100%;
  color:#fff;
  padding:5px;
  text-align: center;
  border-radius:10px;

}
#menulist{
  display:none;
}

}
.sideicon{
  margin-left:77%;
  margin-top: -140px;
  height:120px;
  width: 120px;
}
  </style>
</head>

<body class="body" style="width:100%">
<!-- navigation -->
  <div class="con1">
    <div style="background-color: rgb(214, 52, 7); height:5px;"></div>
    <div class="header">
    <img src="../sveri.png" alt="logo" height=120px width=120px class="logo">
      <div class="sinfo">
        <h4>SHRI VITHAL EDUCATION & RESEARCH INSTITUTE'S
          COLLEGE OF ENGINEERING (POLYTECHNIC), PANDHARPUR</h4>
        Approved by AICTE, New Delhi and Affiliated to MSBTE, Mumbai,NBA Accridation for all 5 applied programmes
        P.B.No.54 Gopalpur-Ranjani Road, Pandharpur-413304, Dist: Solapur, Maharashtra, India.
        Phone No.+917767003372, Email:cod@sveri.ac.in
      </div>
    
      <img src="../NBA.png" class="sideicon" alt="logo" class="logo">
<div class="me" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>


      <script>
         var z=1;
var menuList = document.getElementById("menuList");

function myFunction(x) {
  x.classList.toggle("change");



if(z==1)
{
  menulist.style.display="block";
  z=0;
}
else{
  menulist.style.display="none";
  z=1;
}
}
</script>




  </div>
  
  <div class="nav" id="menulist" style="overflow:'hidden'">
                <li><a href="student_dashboard.php">Home</a></li>
                <li><a class="a"href="student_noticeboard.php">Notice Board</a></li>
                <li><a class="b"href="student_books.php">My Books</a></li>
                <li><a class="c"href="student_profile.php">My Profile</a></li>
                <li><a class="f"href="student_logout.php">Logout</a></li>
            </div>
    <marquee >
      <h6>Library is open within 9 Am to 5.30 Pm ,Wednesday will be holiday.</h6>
    </marquee>
    <!-- <div align=center><a href='https://www.counter12.com'><img src='https://www.counter12.com/img-BWbbaDCz5a6Bzd2C-58.gif' border='0' alt='conter12'></a><script type='text/javascript' src='https://www.counter12.com/ad.js?id=BWbbaDCz5a6Bzd2C'></script></div> -->
        </div>
        </div>
        <!-- </body> -->

</html>

