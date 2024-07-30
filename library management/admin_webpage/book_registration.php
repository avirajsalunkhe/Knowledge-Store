<?php
include 'admin_index.php';
include '../dbconnection.php';


if(isset($_POST['sub1'])){
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $sem = $_POST['sem'];
    $blocation = $_POST['blocation'];
    $dep = $_POST['dep'];
    $bqty = $_POST['bqty'];
    $orgbqty = $_POST['bqty'];
    $bprice = $_POST['bprice'];
    $bnumber = $_POST['bnumber'];
    

    $SELECT ="SELECT bnumber From book_data where bnumber = ? ";
    $INSERT ="INSERT Into book_data(bname,aname,bqty,orgbqty,bprice,blocation,bnumber,sem,dep) values(?,?,?,?,?,?,?,?,?)";
    
    $stmt =$conn->prepare($SELECT);
    $stmt->bind_param("s",$bnumber);
    $stmt->execute();
    $stmt->bind_result($bnumber);
    $stmt->store_result();
    @$rnum=$stmt->num_rows;
    
    if(@$rnum==0){
       $stmt->close();
       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("sssssssss",$bname,$aname,$bqty,$orgbqty,$bprice,$blocation,$bnumber,$sem,$dep);
       $stmt->execute();
       include("book_mailer.php");
    }else{
       
       echo '<script type="text/javascript">';
       echo ' alert("Book Already registered....")';
       echo '</script>';
    }
    }

  
         




?>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    </head>
    <body>
    <div class="container1">
       <form action="" method="post">
          <h3>Book Registration</h3>
            <div class="content">
                        <div class="input-box">
                              <label for="bname">Book Name</label>
					          <input type="text" placeholder="Enter Book name" name= "bname" required>
				        </div>
                        <div class="input-box">
                              <label for="sem">Semester</label>
                            <select name="sem"  required>
                                    <option value="" selected="selected"> Please Select </option>
                                    <option value="Semester 1">Semester 1</option>
                        			<option value="Semester 2">Semester 2</option>
                        			<option value="Semester 3">Semester 3</option>
                        			<option value="Semester 4">Semester 4</option>
                        			<option value="Semester 5">Semester 5</option>
                        			<option value="Semester 6">Semester 6</option>
                                    <option value="Other">Other...</option>
                            </select>
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
                            </select>
				        </div>
                        <div class="input-box">
                              <label for="blocation">Book Location</label>
                            <select name="blocation"  required>
                                    <option value="" selected="selected"> Please Select </option>
                                    <option value="Rack no 01">Rack no 01</option>
                        			<option value="Rack no 02">Rack no 02</option>
                        			<option value="Rack no 03">Rack no 03</option>
                        			<option value="Rack no 04">Rack no 04 </option>
                        			<option value="Rack no 05">Rack no 05</option>
                        			<option value="Rack no 06">Rack no 06</option>
                            </select>
				        </div>
				<div class="input-box">
                              <label for="aname">Author Name</label>
					          <input type="text" placeholder="Enter Book Author name" name= "aname" required>
				</div>
				<div class="input-box">
                              <label for="bqty">Book Quantity</label>
					<input type="text" placeholder="Enter total Book quantity" name= "bqty" required>
				</div>
				<div class="input-box">
                              <label for="bprice">Book Price</label>
					<input type="text" placeholder="Enter Book prise" name= "bprice" required>
				</div>
				<div class="input-box">
                              <label for="bnumber">Book Number</label>
					<input type="text" placeholder="Enter Book number" name= "bnumber" required>
				</div>
				<div class="input-box">
                              <label for="iname">Issue Date</label>
					<input type="date" placeholder="Enter Book Issue Date" name= "iname" >
				</div>
				<div class="button-container">
					<button type="submit" name="sub1">Register Book</button>
				</div>

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
<style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: sans-serif;
}
/* #d4{
    margin-left:400px;
    margin-top:120px;

 display: flex;   
align-items: center;
justify-content: center; */
 /* height: 100vh; */
     /* background-color: #fff; */
/* } */
.container1{
    display: flex;
    background-color: #fff;
max-width: 750px;
padding: 28px;
margin: 0 29%;
margin-top: 45px;
margin-bottom: 200px;
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

@media (max-width:1200px) {
  .container1{
    min-width: 1000px;
    height:1840px;
    margin-left:10%; 
    margin-top:10%;
  }
  /* .card-body{
    margin-left:25%;
  } */
  .input-box{
    width:100%;
    height:150px;
    font-size:40px;
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
  margin-top:50px;
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
</html>