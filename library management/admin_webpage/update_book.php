<?php
include 'admin_index.php';
include '../dbconnection.php';
 
if(isset($_POST['update'])){
    $id = $_GET['bnumber'];
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $sem = $_POST['sem'];
    $blocation = $_POST['blocation'];
    $dep = $_POST['dep'];
    $bqty = $_POST['bqty'];
    $orgbqty = $_POST['orgbqty'];
    $bprice = $_POST['bprice'];
    $bnumber = $_POST['bnumber'];

    $querie ="UPDATE  book_data SET bname='$bname',aname='$aname',orgbqty='$orgbqty',bqty='$bqty',bprice='$bprice',blocation='$blocation',bnumber='$bnumber',sem='$sem',dep='$dep' WHERE bnumber= '$id'";
    
    $query_run = mysqli_query($conn,$querie);
    if($query_run)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Data updated successfully....");location="book_table.php"';
        echo '</script>';
        //header(sleep(3),'location:book_table.php');
       
       
    }else{
        echo '<script type="text/javascript">';
        echo ' alert("Data not Updated....")';
        echo '</script>';
    }
}
if(isset($_GET['bnumber']))
{
    $id = $_GET['bnumber'];
    $query= "select * from book_data where bnumber= $id ";
    $result = mysqli_query($conn,$query);
    while($rows = mysqli_fetch_assoc($result))
    {
      

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
          <h3>Update Book Data</h3>
            <div class="content">
                        <div class="input-box">
                              <label for="bname">Book Name</label>
					          <input type="text" value="<?php echo $rows['bname'];?>" name= "bname" required>
				        </div>
                        <div class="input-box">
                              <label for="sem">Semister</label>
                            <select name="sem" style="width:280px ; height:40px ;" required>
                                    <option value="<?php echo $rows['sem'];?>" ><?php echo $rows['sem'];?></option>
                                    <option value="Semister 1">Semister 1</option>
                        			<option value="Semister 2">Semister 2</option>
                        			<option value="Semister 3">Semister 3</option>
                        			<option value="Semister 4">Semister 4</option>
                        			<option value="Semister 5">Semister 5</option>
                        			<option value="Semister 6">Semister 6</option>
                                    <option value="Other">Other...</option>
                            </select>
				        </div>

                        <div class="input-box">
                              <label for="dep">Department</label>
                            <select name="dep" style="width:280px ; height:40px ;" required>
                                    <option value="<?php echo $rows['dep'];?>" selected="selected"><?php echo $rows['dep'];?> </option>
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
                            <select name="blocation" style="width:280px ; height:40px ;" required>
                                    <option value="<?php echo $rows['blocation'];?>" selected="selected"><?php echo $rows['blocation'];?></option>
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
					          <input type="text" value="<?php echo $rows['aname'];?>" name= "aname" required>
				</div>
				<div class="input-box">
                              <label for="bqty">Available Book Quantity</label>
					<input type="text" value="<?php echo $rows['bqty'];?>" name= "bqty" required>
				</div>
                <div class="input-box">
                              <label for="orgbqty">Total Book Quantity</label>
					<input type="text" value="<?php echo $rows['orgbqty'];?>" name= "orgbqty" required>
				</div>
				<div class="input-box">
                              <label for="bprice">Book Price</label>
					<input type="text" value="<?php echo $rows['bprice'];?>" name= "bprice" required>
				</div>
				<div class="input-box">
                              <label for="bnumber">Book Number</label>
					<input type="text" value="<?php echo $rows['bnumber'];?>" name= "bnumber" required>
				</div>
				<div class="input-box">
                              <label for="iname">Issue Date</label>
					<input type="text" value="<?php echo $rows['idate'];?>" name= "iname" >
				</div>
                </div><div class="button-container">
					<a href="book_table.php"><button type="button" name="btn2" >Back</button></a>
				</div>
				<div class="button-container">
					<button type="submit" name="update">Update Data</button>
				</div>
                    <?php
                    
                    }
                }
                    
                    ?>
			</div>
		</form>
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
#d4{
    margin-left:400px;
    margin-top:120px;

 display: flex;   
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
margin: 0 424px;
margin-top: 45px;
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
    </style>
</html>