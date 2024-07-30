<?php
include 'main.php';
include '../dbconnection.php';

$query= "select * from noticeboard ";
$result = mysqli_query($conn,$query);


while($rows = mysqli_fetch_assoc($result))
{
    
	
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Notice Board</title>
    <style>
        body {
		height: 100%;
		/* background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/concrete-wall-background.jpg) center center fixed; */
		background-size:cover;
}

.shade {
		overflow: auto;
		position: absolute;
		top: 0;
		left: 0;
		/* bottom: 0; */
		right: 0;
		background-image: linear-gradient( 90deg, rgba(255 175 177), transparent);
}
.button{
	cursor: pointer;
	background:white;
	border-radius:5px; 
	color:black;
	width:140px;
	height:40px;
	margin-left:17%;
	margin-top:-12%;
}

.blackboard {
		position: relative;
		width: 1000px;
		margin: 7% auto;
		margin-top:300px;
		border: tan solid 12px;
		border-top: #bda27e solid 12px;
		border-left: #b19876 solid 12px;
		border-bottom: #c9ad86 solid 12px;
		box-shadow: 0px 0px 6px 5px rgba(58, 18, 13, 0), 0px 0px 0px 2px #c2a782, 0px 0px 0px 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
		background-image: radial-gradient( circle at left 30%, rgba(34, 34, 34, 0.3), rgba(34, 34, 34, 0.3) 80px, rgba(34, 34, 34, 0.5) 100px, rgba(51, 51, 51, 0.5) 160px, rgba(51, 51, 51, 0.5)), linear-gradient( 215deg, transparent, transparent 100px, #222 260px, #222 320px, transparent), radial-gradient( circle at right, #111, rgba(51, 51, 51, 1));
		background-color: #333;
}

.blackboard:before {
		box-sizing: border-box;
		display: block;
		position: absolute;
		width: 100%;
		height: 100%;
		background-image: linear-gradient( 175deg, transparent, transparent 40px, rgba(120, 120, 120, 0.1) 100px, rgba(120, 120, 120, 0.1) 110px, transparent 220px, transparent), linear-gradient( 200deg, transparent 80%, rgba(50, 50, 50, 0.3)), radial-gradient( ellipse at right bottom, transparent, transparent 200px, rgba(80, 80, 80, 0.1) 260px, rgba(80, 80, 80, 0.1) 320px, transparent 400px, transparent);
		border: #2c2c2c solid 2px;
		content: "Notice Board";
		font-family: 'Permanent Marker', cursive;
		font-size: 2.2em;
		color: rgba(238, 238, 238, 0.7);
		text-align: center;
		padding-top: 20px;
}

.form {
		padding: 70px 20px 20px;
}

p {
		position: relative;
		margin-bottom: 1em;
}


p:nth-of-type(5) > label {
		vertical-align: top;
}

input,
textarea {
		vertical-align: middle;
		padding-left: 10px;
        width: 900px;
		background: none;
		border: none;
		font-family: 'Permanent Marker', cursive;
		font-size: 1.2em;
		color: rgba(238, 238, 238, 0.8);
		line-height: 2;
		outline: none;
        
}

#myTextArea {
  height: auto;
  resize: none;
  width: 910px;
  line-height:1.4;
  min-height: 200px; /* minimum height */
  max-height: 800px; /* maximum height */
  overflow-y: hidden;
  overflow-x: hidden;
}
@media (max-width:1200) {
	.shade{
		width:1180px;
	}
	.button{
		margin-left: 2%;
        margin-top: -10%;
	}
	
}
    </style>
</head>
<body>

<div class="shade">
		<div class="blackboard">
				<div class="form" >
						
					<p style="color:white"><b>Date:-<i><?php echo $rows['date'];?></i></b></p>
						<center>
						<?php echo '<img src="data:image;base64,'.base64_encode($rows['img']).'" alt="Image" style="width:200px; height:200px;" >';?>
                        </center>
						<p><br><br><br>
						<?php $show=$rows['notice'];?>
                            <textarea id="myTextArea" style="color:white;" disabled><?php echo $show ;?> </textarea>
						</p>
					</div>
					
					
				</div>
					<input type="button" class="button" value="Read more..." onclick="autoGrow()"   name="readmore"><br>&nbsp
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
    <script>
	textarea=  document.getElementById("myTextArea");
    function autoGrow() {
  textarea.style.height = "auto";
  textarea.style.height = (textarea.scrollHeight) + "px";
}

    </script>
	<?php
}
?>

</body>
</html>
