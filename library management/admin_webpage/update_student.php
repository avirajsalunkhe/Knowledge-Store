<?php
include 'admin_index.php';
include '../dbconnection.php';

if(isset($_GET['eid']))
{
    $id = $_GET['eid'];
    $querys = "SELECT * FROM student_data WHERE eid= '$id' ";
    $resultg = mysqli_query($conn,$querys);
    while($row = mysqli_fetch_assoc($resultg))
    {
        $queryg = "SELECT * from all_user_images where eid = '$id'";
     $results = mysqli_query($conn,$queryg);
     while($rowa = mysqli_fetch_array($results))
     {
        if(isset($_POST['btn1'])){
            @$fname = $_POST['fname'];
            @$lname = $_POST['lname'];
            @$eid = $_POST['eid'];
            @$dep = $_POST['dep'];
            @$enrno = $_POST['enrno'];
            @$psd1 = $_POST['psd1'];
            @$uimg = addslashes(file_get_contents($_FILES["uimg"]["tmp_name"]));

            $querie ="UPDATE  student_data SET fname='$fname',lname='$lname',eid='$eid',dep='$dep',enrno='$enrno',psd1='$psd1' WHERE eid = '$id'";
            $queryd ="UPDATE  all_user_images set uimg='$uimg' where eid='$id'";
            $query_run1 = mysqli_query($conn,$queryd);
    $query_run = mysqli_query($conn,$querie);
    if($query_run)
    {
        require 'account_update_mail.php';
       
       
    }else{
        echo '<script type="text/javascript">';
        echo ' alert("Data not Updated....")';
        echo '</script>';
    }
}

?>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: sans-serif;
}
#d4{
    margin-left:400px;
    margin-top:120px;

 /* display: flex; */   
align-items: center;
justify-content: center;
 /* height: 100vh; */
     /* background-color: #fff; */
}
.container1{
    display: flex;
    background-color: #fff;
max-width: 650px;
padding: 28px;
margin: 0 28px;
margin-top: -100px;
box-shadow: 0 15px 20px  black;
}
.container2{
    display: flex;
    background-color: #fff;
max-width: 750px;
padding: 30px;
margin: 0 400px;
margin-top: 30px;
margin-bottom: 100px;
box-shadow: 0 15px 20px  black;
}
h3{
    font-size: 26px;
    font-weight:600;
     text-align: left;
     color: #2f4f4f;
    padding-bottom: 8px;
    border-bottom: 1px solid silver;
}
.content{
     display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.input-box{
display: flex;
flex-wrap: wrap;
width: 50%;
padding-bottom: 15px;
}

.input-box:nth-child(2n){
justify-content: end;
}

.input-box label{
width: 95%;
color: #2f4f4f;
font-weight:bold;
margin:5px 0;

}



.input-box select , input{
height: 40px;
width: 95%;
padding: 0 10px;
border-radius: 5px;
border: 1px solid  #ccc;
outline: none;
}

.input-box input:is(:focus, :valid){
box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}

.input-box select:is(:focus, :valid){
box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}

.button-container{
margin: 15px 0;
}

.button-container button{
width: 100%;
float: right;
margin-top: 10px;
padding: 10px;
display: block;
font-size: 20px;
color: #fff;
border: none;
box-sizing: border-box;
border-radius: 5px;
background-image: linear-gradient(to right, #aa076b, #61045f);
}

.button-container button:hover{

background-image: linear-gradient(to right, #61045f, #aa076b);
}

@media(max-width:100px) {
  .container{
    min-width:400px;
  }
  .content{
   max-height:380px;
   overflow: auto;
  }
  .input-box{
    margin-bottom:12px;
    width:100%;
  }

   .input-box:nth-child(2n){
    justify-content: space-between;
  }
   .content::-webkit-scrollbar{
    width: 0;
  }
}
/* Sidenav */
.sidenav {
    color: #333;
    border-bottom-right-radius: 25px;
    height: 50%;
    left: 0;
    overflow-x: hidden;
    margin-top: 200px;
    padding-top: 20px;
    position: absolute;
    top: 70px;
    width: 250px;
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
    font-size: 20px;
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
    </style>
    
    </head>
    <body>
    <div class="sidenav">
<div class="profile">
    <!-- <img src="love4.jpg" alt="" width="100" height="100" onclick="<input type='file'>"> -->
<label for="image">
     <input type="image" name="image" id="image" style="display:none;"/>
     <?php echo '<img src="data:image;base64,'.base64_encode($rowa['uimg']).'" alt="Image" style="width:180px; height:180px;" >';?>
</label>
    <div class="name">
        
    <?php echo $rows['fname'];?>
    </div>
    <div class="job">
    <?php echo $rows['dep'];?>
    </div>
    </div>

</div>
    <div class="container2">
       <form action="" method="post" enctype="multipart/form-data">
          <h3>Update Student Data</h3>
            <div class="content">
                        <div class="input-box">
                              &nbsp <label for="fname">First Name :</label>
					          <input type="text" value="<?php echo $row['fname'];?>" name= "fname" required>
				        </div>
				<div class="input-box">
                              <label for="lname">Last Name :</label><br>
					          <input type="text" value="<?php echo $row['lname'];?>" name= "lname" required>&nbsp &nbsp &nbsp
				</div>
				
				<div class="input-box">
                              <label for="eid">E-mail :</label>
					<input type="email" value="<?php echo $row['eid'];?>" name= "eid" required>
				</div>
				<div class="input-box">
                              <label for="dep">Department</label>
                            <select name="dep" style="width:320px ; height:40px ;" required>
                                    <option value="<?php echo $row['dep'];?>" selected="selected"><?php echo $row['dep'];?></option>
                                    <option value="Information Technology">Information Technology</option>
                        			<option value="Computer Engineering">Computer Engineering</option>
                        			<option value="Electronics and Telecommunication">Electronics and Telecommunication</option>
                        			<option value="Electrical Engineering">Electrical Engineering </option>
                        			<option value="Civil Engineering">Civil Engineering</option>
                        			<option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Other">Other...</option>
                            </select>&nbsp &nbsp
				        </div>
				<div class="input-box">
                              <label for="enrno">Enrollment no :</label>
					<input type="text" value="<?php echo $row['enrno'];?>" name= "enrno" required>
				</div>
                <div class="input-box">
                              <label for="uimg">Upload your Photo :<h6>(Size:- 1-1024 KB)*</h6></label> &nbsp
					<input type="file"  name= "uimg" id="uimg" required>&nbsp &nbsp
				</div>
                <div class="input-box">
                              <label for="psd1">Password :</label>
                              <input type='password'id="psd1" name='psd1' class='input--field'value="<?php echo $row['psd1'];?>"  required><br><br>
                              
                </div><div class="button-container">
					<a href="student_table.php"><button type="button" name="btn2" >Back</button></a>
				</div>
                <!-- <div class="input-box">
                </div> -->
				<div class="button-container">
					<button type="submit" name="btn1">Update</button>
				</div>
                <?php
                 }
                }
            }
                 ?>
			</div>
		</form>
        </div>
    </div>
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
    </body>
</html>
