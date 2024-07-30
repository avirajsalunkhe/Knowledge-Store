<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

.logo,.sinfo,.sideicon {
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
marquee{
  background-color: #ff0000;
  color: aliceblue;
  margin-top: 5px;
  /* font-size: 20px; */
  padding-top: 5px;
}
.header {
    
    text-align: center;
    margin: 0;
  }
  .con1{
    z-index: 1;
    width:100%;
    background-color: whitesmoke;
    position: sticky;
    position: -webkit-sticky;
   top: 0;
   border: 2px 2px solid black;
   box-shadow: 2px 2px;
  }
  .logo {
    position: absolute;
    margin-top: 10px;
    left: 150px;
    right: 0;
  }
  
  .sinfo {
    font-family: 'Merriweather', serif;
    position: relative;
    font-weight: bold;
    color: black;
    width: 700px;
    align-items: center;
    left: 450px;
    font-weight: 900;
    margin-right: 20px;
    margin-top: 20px;
  }
  
  .nav{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding-top: 20px;
    padding-bottom: 10px;
}

.nav li{
    list-style-type: none;
}

.nav a{
    font-size:15px; 
    text-decoration:none;
    margin-right:40px;
    color:#000000;
    transition:0.3s;
}
.nav  a:hover{
  font-size: 20px;
    border-bottom:2px solid rgb(255, 0, 0);
    color:#ff0000;
    
}
.f:hover + .dropdown-content{
  display:block;
  
}
.dropdown-content:hover {
  display:block;
}

.mainimg{
  width: 220vh;
  height: 100vh;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;

}


li.dropdown {
    display: inline-block;
    border-radius:15px;

  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    height:100px;
    border-radius: 16px;
    background-color: #fff;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .f:hover  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  .dropdown-content button{
width: 100%;
float: right;
margin-top:7px;
margin-bottom: -50px;
padding: 5px;
display: block;
font-size: 15px;
color: #fff;
border: none;
box-sizing: border-box;
border-radius: 5px;
background-image: linear-gradient(to right, #aa076b, #61045f);
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
                <li><a  class="a"href="home.php">Home</a></li>
                <li><a class="c"href="glance.php">Library at a Glance</a></li>
                <li><a class="b"href="student_noticeboard.php">Notice Board</a></li>
                <li><a class="d"href="about_us.php">About us</a></li>
                <li><a class="f">Log-in </a>  
                <div class="dropdown-content">
                      <a href="../admin_webpage/admin_login.php" ><button class="button-container">Admin Login</button></a><br><br>
                      <a href="../student_webpage/student_login.php" ><button class="button-container">User Login</button></a>    
                  </div>
                </li>
            </div>
    <marquee >
      <h6>Library is open within 9 Am to 5.30 Pm ,Wednesday will be holiday.</h6>
    </marquee>
        </div>
        </div>
        </body>
</html>