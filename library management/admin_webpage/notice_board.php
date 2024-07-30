<?php
include 'admin_index.php';
include '../dbconnection.php';


if(isset($_POST['posted'])){
    $notice = $_POST['notice'];
    @$uimg = addslashes(file_get_contents($_FILES['uimg']['tmp_name']));
    $query ="UPDATE noticeboard set notice='$notice',img='$uimg'  where id='1'";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
       echo '<script type="text/javascript">';
       echo ' alert("Notice posted successfully....")';
       echo '</script>';
    }else{
       
       echo '<script type="text/javascript">';
       echo ' alert("Error 404 ...")';
       echo '</script>';
    }
    }
    if(isset($_POST['gallery'])){
      $gdetails = $_POST['gdetails'];
      @$gimg = addslashes(file_get_contents($_FILES['gimg']['tmp_name']));
      $quer ="INSERT into gallery(iname,img) values ('$gdetails','$gimg')";
  
      $query_run = mysqli_query($conn,$quer);
      if($query_run){
         echo '<script type="text/javascript">';
         echo ' alert("Image Uploaded....")';
         echo '</script>';
      }else{
         
         echo '<script type="text/javascript">';
         echo ' alert("Error 404 ...")';
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
       <form action="" method="post" enctype="multipart/form-data">
            <h3>Notice Board content </h3>
            <div class="content">
                        <div class="textarea">
                              <b><label >Notice Content</label><br></b>
                              <textarea id="notice" name="notice" rows="4" cols="70"></textarea>
				        </div>
                        <div class="button-container">
                              <label for="uimg">Upload Related Image :<h6>(Size:- 1-1024 KB)*</h6></label> &nbsp
					          <input type="file"  name= "uimg" id="uimg">&nbsp &nbsp
				        
					            <button type="submit" name="posted" >Post</button>
				        </div>
			</div>
		</form>
        </div>
      </div>
      <div class="container1">
       <form action="" method="post" enctype="multipart/form-data">
            <h3>Upload Gallery Photos </h3>
            <div class="content">
                        <div class="textarea">
                              <b><label >Image Details</label><br></b>
                              <input id="gdetails" name="gdetails" >
				        </div>
                        <div class="button-container">
                              <label for="uimg">Upload Image :<h6>(Size:- 1-1024 KB)*</h6></label> &nbsp
					          <input type="file"  name= "gimg" id="gimg">&nbsp &nbsp
				        
					            <button type="submit" name="gallery" >Upload</button>
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
    min-width: 700px;
    height:700px;
    margin-left:25%; 
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
    width:100%;
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