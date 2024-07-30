<?php
if($_POST)
{
    include '../dbconnection.php';
$username=$_POST['username'];
$password=$_POST['password'];

  $query= "SELECT * from student_data where eid = '$username' and psd1='$password'";
  $result=mysqli_query ($conn, $query);
 if(mysqli_num_rows ($result) ==1)
    { session_start();
      $_SESSION['student_logged_in']=$_POST['username'];
      header ('location:student_dashboard.php');
  }
  else {
    echo '<script type="text/javascript">';
    echo 'alert("Incorrect ID/Password....")';
    echo '</script>';
}
}
?>
<html>
<head>
<link href="../sveri.png" rel='icon'>
    <style>
*{
            margin: 0;padding: 0;box-sizing: border-box;
        }
        body{
            display: flex;
            align-items: center;
            flex-direction:column;
            width: 100vw;
            height:100vh;
            background: linear-gradient(to top,rgba(0, 0, 0, 0.5)50%,rgba(0, 0, 0, 0.5)50%),url(../library.jpg);
            background-position: center;
         background-size: cover;
         position: relative;

        }
        .main{
            background-color:rgb(37,37,37);
            border-radius: 10px;
            box-shadow: 10px 10px 8px rgba(0,0,0,0.5);

        }
        .form{
            width: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding:  20px 25px;
        
        }
        input{
            width: 100%;
            margin: 10px;
        }
        .heading{
            color: white;
            font-size: 30px;
            color: aquamarine   ;
            font-family: Comic Sans MS;
        }
        .main_heading{  
            margin-top:100px;
            margin-bottom:50px;

            color:white;
        }
        .main_heading span{
            color:aquamarine;
        }  

        
.input-group-login
{
	top: 150px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid rgba(255, 255, 255, 0.993);
	outline:none;
    color:white;
    background: transparent;
}
.submit-btn{
    background-color: aquamarine;
    
    color: aliceblue;
    width: 100%;
    font-size: 20px;
    border-radius: 50px;
    padding: 10px 10px;
}
.register{
    color: #fff;
}
.reg{
    color: aquamarine;
}
</style>
</head>
<body >
<h1 class="main_heading">Library <span>Management</span> System</h1>

<div class="main">
        <div class="form">
            <div class="top">
                <div class="heading">
                    <span>Student Login</span>
                </div>
            </div>
            <div class="bottom">
                    <form id='login' class='form'action=''method='post'>
                        <input type='text'name="username"class='input-field'placeholder='Email Id' required >
                        <input type='password'name="password"class='input-field'placeholder='Enter Password' required>
                        <br><p id="msg"></p> <br>
                        <button type='submit'name='subtn'class='submit-btn'>Log in</button>
                        <br>
                        <span class="register">Don't have an account ? <a onclick="run()" class="reg">Register</a></span>
                 </form>
                </form>
            </div>
        </div>
    </div>
    <script>
        function run()
        {
            alert("Contact Library Incharge / Mail your details to avirajsalunkhe1@gmail.com ");
        }
    </script>
</body>
</html>