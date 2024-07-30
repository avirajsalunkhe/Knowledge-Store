<?php
include 'admin_index.php';
include '../dbconnection.php';

if(isset($_POST['btn1'])){
    @$fname = $_POST['fname'];
    @$r1name = $_POST['rname'];
    @$lname = $_POST['lname'];
    @$eid = $_POST['eid'];
    @$dep = $_POST['dep'];
    @$enrno = $_POST['enrno'];
    @$psd1 = $_POST['psd1'];
    @$psd2 = $_POST['psd2'];
    @$uimg = addslashes(file_get_contents($_FILES["uimg"]["tmp_name"]));
     if(empty($uimg)){
      $uimg="https://i.ibb.co/dLP7J3R/Default.png";
      }
 
        if($r1name == "admin" ){
            $SELECT ="SELECT eid From admin_data where eid = ? ";

            $INSERT ="INSERT Into admin_data(fname,lname,eid,dep,enrno,psd1,psd2) values(?,?,?,?,?,?,?)";
            $query ="INSERT Into all_admin_images(eid,uimg) values('$eid','$uimg')";

            $stmt =$conn->prepare($SELECT);
            $stmt->bind_param("s",$eid);
            $stmt->execute();
            $stmt->bind_result($eid);
            $stmt->store_result();
            @$rnum=$stmt->num_rows;
            
            if(@$rnum==0){
                $query_run = mysqli_query($conn,$query);
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssiss",$fname,$lname,$eid,$dep,$enrno,$psd1,$psd2);
                if($stmt->execute()){
                  $querys = "SELECT * from all_admin_images where eid = '$eid'";
                  $results = mysqli_query($conn,$querys);
                  while($row = mysqli_fetch_array($results))
                  {
                include 'mailsender.php';
               }}
                else{
                    echo '<script type="text/javascript">';
               echo ' alert("Account Not Registered....")';
               echo '</script>';
                }
            }else{
               
               echo '<script type="text/javascript">';
               echo ' alert("Already registered....")';
               echo '</script>';
            }
        }else{
           
            $SELECT ="SELECT eid From student_data where eid = ? ";
            $INSERT ="INSERT Into student_data(fname,lname,eid,dep,enrno,psd1,psd2) values(?,?,?,?,?,?,?)";
            $query ="INSERT Into all_user_images(eid,uimg) values('$eid','$uimg')";


            $stmt =$conn->prepare($SELECT);
            $stmt->bind_param("s",$eid);
            $stmt->execute();
            $stmt->bind_result($eid);
            $stmt->store_result();
            @$rnum=$stmt->num_rows;
   
            if(@$rnum==0){
               $query_run = mysqli_query($conn,$query);
               $stmt->close();
               $stmt = $conn->prepare($INSERT);
               $stmt->bind_param("ssssiss",$fname,$lname,$eid,$dep,$enrno,$psd1,$psd2);
               if($stmt->execute()){
                $querys = "SELECT * from all_user_images where eid = '$eid'";
                $results = mysqli_query($conn,$querys);
                while($row = mysqli_fetch_array($results))
                {
                include 'mailsender.php';
               }}
                else{
                    echo '<script type="text/javascript">';
               echo ' alert("Account Not Registered....")';
               echo '</script>';
                }
            }else{
               
               echo '<script type="text/javascript">';
               echo ' alert("Already registered....")';
               echo '</script>';
            }
            }
           }
       


?>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
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
/* .container1{
    display: flex;
    background-color: #fff;
max-width: 650px;
padding: 28px;
margin: 0 39%;
margin-top: -100px;
box-shadow: 0 15px 20px  black;
} */
.container2{
    display: flex;
    background-color: #fff;
max-width: 850px;
min-width: 500px;
padding: 30px;
margin: 0 25%;
margin-bottom: 200px;
margin-top: 40px;
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

@media(max-width:1200px) {
  /* .container2{
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
  } */



  .container2{
    min-width: 1000px;
    height:1840px;
    margin-left:10%; 
    margin-top:10%;
  }
  .input-box{
    width:100%;
    height:150px;
    font-size:40px;
  }
  .radio-button {
  margin-right:800px;
}
  .content{
   max-height:1910px;
   overflow: auto;
  }
  
  .input-box{
    margin-bottom:12px;
    width:100%;
  }
  .input-box select, input{
    height:80px;
  }
  .input-box label{
width: 95%;
color: #2f4f4f;
font-weight:bold;
margin:5px 0;
font-size:45px;
}
h3{
  font-size:63px;
}
.button-container button{
  margin-top:200px;
  font-size:50px;
  border-radius:20px;
}

   .input-box:nth-child(2n){
    justify-content: space-between;
  }
   .content::-webkit-scrollbar{
    width: 0;
    
  }
}
    </style>
    
    </head>
    <body>
    <div class="container2">
       <form action="" method="post" enctype="multipart/form-data">
          <h3>Admin / student Registration</h3>
            <div class="content">
                        <div class="input-box">
                              &nbsp <label for="fname">First Name :</label>
					          <input type="text" placeholder="Enter first name" name= "fname" required>
				        </div>
				<div class="input-box">
                              <label for="lname">Last Name :</label><br>
					          <input type="text" placeholder="Enter last name" name= "lname" required>&nbsp &nbsp &nbsp
				</div>
				<div class="radio-button">
                              <!-- <label for="rname">Registration type</label> -->
                              <label for="rname">Student :</label>
					 <input type="radio" name="rname" value="user" id="user">
        </div>
        <div class="radio-button">
                <label for="rname">Admin :</label>
                    <input type="radio" name="rname" value="admin" id="admin" >
				</div>
				<div class="input-box">
                              <label for="eid">E-mail :</label>
					<input type="email" placeholder="Enter E-mail ID" name= "eid" required>
				</div>
				<div class="input-box">
                              <label for="dep">Department</label>
                            <select name="dep"  required>
                                    <option value="" selected="selected"> Please Select </option>
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
					<input type="text" placeholder="Enter Enrollment No" name= "enrno" required>
				</div>
                <div class="input-box">
                              <label for="uimg">Upload your Photo :<h6>(Size:- 1-1024 KB)*</h6></label> &nbsp
					<input type="file"  name= "uimg" id="uimg" required>&nbsp &nbsp
				</div>
                <div class="input-box">
                              <label for="psd1">Password :</label>
                              <input type='password'id="psd1" name='psd1' class='input--field'placeholder='Enter Password' onkeyup="aviraj1()" required><br><br>
                              <input type='password'id="psd2" name='psd2' class='input--field'placeholder='Confirm Password' onkeyup="aviraj1()" required>
                              <br><p id="msg">Avi...<p><br>
                </div>
                <!-- <div class="input-box">
                </div> -->
				<div class="button-container">
					<button type="submit" name="btn1">Register</button>
				</div>
			</div>
		</form>
        </div>
    </div>

    <script>
    function aviraj1(){
    let password = document.getElementById('psd1').value;
    let confirmPassword = document.getElementById('psd2').value;
    let message = document.getElementById('msg');
        if(document.getElementById('psd1').value.length>=1){
            if( document.getElementById('psd2').value.length>=1){
            if (password == confirmPassword){
              message.textContent="Password match.";
              document.getElementById('msg').style.color="green";
              document.getElementById('msg').style.fontSize="large";
            }
            else if (password != confirmPassword){
              message.textContent="Didn't match password.";
              document.getElementById('msg').style.color="red";
              document.getElementById('msg').style.fontSize="large";
            }
        }
    }
    }

</script>
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