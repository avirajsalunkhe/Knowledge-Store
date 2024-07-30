<?php
include 'student_index.php';
include '../dbconnection.php';
session_start();
if(!$_SESSION['student_logged_in'])
{   
  header("location:student_login.php");
}
error_reporting(0);
 

if($_SESSION['student_logged_in'])
{ 
     $username = $_SESSION['student_logged_in'];
     $conn =mysqli_connect("localhost","root","","library_management");
     $query = "SELECT * from student_data where eid = '$username'";
     $result = mysqli_query($conn,$query);
     while($rows = mysqli_fetch_assoc($result))
     {
        $querys = "SELECT * from all_user_images where eid = '$username'";
     $results = mysqli_query($conn,$querys);
     while($row = mysqli_fetch_array($results))
     {
      ?>
 
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<style>
    /* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

* {
    margin: 0;
}

body {
    font-family: Arial;
    /* overflow: hidden; */
}

/* NavbarTop */
.navbar-top {
    height: 70px;
}

.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
    color:black;
    border-bottom:2px solid #fff;
}

.navbar-top ul {
    float: right;
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 18px 50px 0 40px;
}

.navbar-top ul li {
    float: left;
}

.navbar-top ul li a {
    color: black;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
}

.icon-count {
    background-color: #ff0000;
    color: #fff;
    float: right;
    font-size: 11px;
    left: -25px;
    padding: 2px;
    position: relative;
}

/* End */

/* Sidenav */
.sidenav {
    color: #333;
    border-bottom-right-radius: 25px;
    height: 86%;
    left: 0;
    overflow-x: hidden;
    margin-top: 200px;
    padding-top: 20px;
    position: absolute;
    top: 70px;
    width: 250px;
}

.rdx{
    margin-left:75%;

}
.profile {
    margin-bottom: 20px;
    margin-top: 100px;
    text-align: center;
}

.profile img {
    border-radius: 200%;
}

.name {
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
    color:black;
}

.job {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
    color:black;
}

.url, hr {
    text-align: center;
}

.url hr {
    margin-left: 20%;
    width: 60%;
}

.url a {
    color: #818181;
    display: block;
    font-size: 15px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #e8f5ff;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
}

/* End */

/* Main */
.main63 {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 15px;
    padding: 0 10px;
    width: 58%;
    color:black;
}

.main63 h2 {
    color:black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 15px;
    margin-bottom: 10px;
    border-bottom:2px solid #fff;
    border-bottom:2px solid #fff;
}

.main63 .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 5px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main63 .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

/* End */

 /* input field style  */

#in{
	position:relative;
	display:inline-block;
}
#invi{
	position:relative;
	display:inline-block;
	transform: translate(-170%,-5%);
	cursor:pointer;
	user-select:none;
	}
#close{
	position:relative;
	display:inline-block;
	transform: translate(-930%,-5%);
	cursor:pointer;
	user-select:none;
	}


@media (max-width:1200px) {

    .main63{
        margin-left:30%;
        margin-top: 40%;

    }
    .sidenav{
        margin-left: 44%;
    }
    .profile {
    margin-top: -7%;
    }
    
}
</style>

<body >
<div class="navbar-top">
    <div class="title">
        <h1>Student Profile</h1>
    </div>
</div>
<!-- end -->
<!-- sidenav -->
<div class="sidenav">
<div class="profile">
    <!-- <img src="love4.jpg" alt="" width="100" height="100" onclick="<input type='file'>"> -->
<label for="image">
     <input type="image" name="image" id="image" style="display:none;"/>
     <?php echo '<img src="data:image;base64,'.base64_encode($row['uimg']).'" alt="Image" style="width:200px; height:200px;" >';?>
</label>
    <div class="name">
        
    <?php echo $rows['fname'];?>
    </div>
    <div class="job">
    <?php echo $rows['dep'];?>
    </div>
    </div>

</div>
    <!-- End -->

    <!-- Main -->
    <div class="main63">
        <h2><a>IDENTITY</a></h2>
        <div class="card">
            <div class="card-body">
                <a href="update_profile.php?eid=<?php echo $rows['eid'];?>"><img class="rdx" src="../rdx1.png" style="height:70px; width:50px; position:absolute"></img></a>
                <table>
                    <tbody>
                        <tr>

                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $rows['fname'];?> &nbsp <?php echo $rows['lname'];?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $rows['eid'];?></td>
                        </tr>
                        <tr>
                            <td>Birth Date</td>
                            <td>:</td>
                            <td><?php echo $rows['bdate'];?></td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td>:</td>
                            <td><?php echo $rows['dep'];?></td>
                        </tr>
                        <tr>
                            <td>Enrollment No.</td>
                            <td>:</td>
                            <td><?php echo $rows['enrno'];?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" id="in"value='<?php echo $rows['psd1'];?>' disabled><div onclick="act()" id="invi">&#128065;</div>
			                 <div onclick="act()" id="close"><b>/</b></div></td>
                             <?php
                                }
                            
                         ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
		var a=1;
        var b=1;
		function act()
		{
            
			if(a==1)
			{
				document.getElementById("in").type="text";
				document.getElementById("close").style="display:none";
				a=0;
			}
			else
			{
				document.getElementById("in").type="password";
				document.getElementById("close").style="display:inline-block";
				a=1;
			}
		}
	</script>
<?php
}
}
?>
<footer>
  <center>
  <div class="copyright"> © 2023 Copyright By Sveri's College of Poly, Pandharpur Designed and Developed By Aviraj Salunkhe, Atharv Kulkarni,<br> Shriniwas Kulkarni, Pravin Jadhav. Under The Guidance of G.S.Misal Sir. </div>
<p> All Rights Reserved.<br>
  <a href="mailto:avirajsalunkhe1@gmail.com"><img style="width:20px; height:20px;" src="../mail.png"></img></a>
    <a href="https://www.instagram.com/its_avi_45_/"><img style="width:20px; height:20px;"src="../insta.png"></img></a>
    </p>
    </center>
</footer>
</body>
</html>