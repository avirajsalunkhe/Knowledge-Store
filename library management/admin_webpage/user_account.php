<?php
include 'admin_index.php';
include '../dbconnection.php';
$id = $_GET['eid'];
$query = "SELECT * from student_data where eid = '$id'";
     $resulta = mysqli_query($conn,$query);
     while($rows = mysqli_fetch_assoc($resulta))
     {
     $querys = "SELECT * from all_user_images where eid = '$id'";
     $results = mysqli_query($conn,$querys);
     while($row = mysqli_fetch_array($results))
     {
        
        $b1= $rows['book1'];
        $b2= $rows['book2'];
        $b3= $rows['book3'];
	    $b4= $rows['book4'];
        $b5= $rows['book5'];
        

?>



<html>
<head>

<style>
body {
    font-size: 12px;
    /* font-family: Comic Sans MS; */
    padding: 30px 0;
    height:100vh;
    }

div#main-card {
	margin-top:70px;
	margin-left:30px;
    max-width: 600px;
	height:450px;
    box-shadow: -5px 2px 18px 4px #ccc;
}

.cover-photo {
    background: #FFB200;
    width: 600px;
    height: 100px;
}
.cd{
    margin-left:1px;
}

.photo {
    background: #f9f9f9;
    width: 200px;
    height: 100px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.its_mi{
    position: relative;
    top: -50px;
    z-index:0;
    height:130px;
    width:140px;
    max-width: 100%;
    max-height: 100%;
    border-radius: 50%;
    box-shadow: -1px 1px 11px 6px rgba(189, 172, 172, 0.33);
}
.content {
    background: #ffff;
    width: 600px;
    height: 0px;
    position: relative;
    top: -140px;
}

.contact {
    background: #ffff;
    width: 600px;
    position: relative;
    height: 248px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

h2.name,
h3,
a {
    margin: 0;
    text-align: center;
}

h2.name {
    padding-bottom: 20px;
    color:#ffff;
}

h3.fullstack {
    padding-bottom: 10px;
}

a {
    color: #FF8800;
    text-decoration: none;
}

a:hover {
    color: black;
}

ul {
    padding: 0;
}

.fa {
    font-size: 22px;
    padding: 10px;
    text-decoration: none;
    color: #0ab581;
}

.fa:hover {
    color: white;
}


div#main-card:hover {
    -webkit-animation-name: pulse;  
    animation-name: pulse;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
    @-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
    }
    50% {
        -webkit-transform: scale3d(1.05, 1.05, 1.05);
        transform: scale3d(1.05, 1.05, 1.05);
    }
    100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
    }
}
    @keyframes pulse {
    0% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
    }
    50% {
        -webkit-transform: scale3d(1.05, 1.05, 1.05);
        transform: scale3d(1.05, 1.05, 1.05);
    }
    100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
    }
} 
.tablep, th{
  border: 1px solid;
 color:white;
 z-index: 2;
 margin-left:0px;
 padding-right:28px;
 padding-left:28px;

}
.tablep{
    position:static;
}
.tablep, td{
color:white;
padding-left:3px;
border: 1px solid;
padding-top:7px;
padding-bottom:7px;
font-size:9px;
}
#primary{


  background-color: #00FFDD; /* Green */
  border: none;
  color: black;
  padding: 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 11px;
  border-radius: 8px;
  cursor: pointer;


}
</style>
</head>
<body>
    <div id="main-card">
    <div class="cd">
        <div class="cover-photo"></div>
        <div class="photo">
            <?php echo '<img class="its_mi" src="data:image;base64,'.base64_encode($row['uimg']).'">';?>
        </div>
        <div class="content">
            <h2 class="name"><?php echo $rows['fname'];?>&nbsp<?php echo $rows['lname'];?></h2>
          <h3 class="fullstack"><?php echo $rows['dep'];?><br /></h3>
            <h3 class="email">
                <a href="mailto:<?php echo $rows['eid'];?>"><?php echo $rows['eid'];?></a>
            </h3>
        </div>
<div class="contact">
<table class="tablep">
  <tr>
    <th>ID</th>
    <th>Book Name</th>
    <th>Author Name</th>
    <th>Issued Date</th>
    <th>Return Date</th>
    <th>Book Number</th>
    <th>Activity</th>
    
  </tr>
  <tr> 
    <?php
    if(!$b1==0)
    {
        $query= "select * from book_data where bnumber= $b1 ";
        $result = mysqli_query($conn,$query);
        while($rowaa = mysqli_fetch_assoc($result))
        {
    ?>
    <td><center>1</center></td>
<td><center><?php echo $rowaa['bname'];?></center></td>
<td><center><?php echo $rowaa['aname'];?></center></td>
<td><center><?php echo $rows['book1idate'];?></center></td>
<td><center><?php echo $rows['book1rdate'];?></center></td>
<td><center><?php echo $rowaa['bnumber'];?></center></td>
<td><center><a href="book_return.php?eid=<?php echo ($id); ?>&& bnumber=<?php echo $rowaa['bnumber'];?>&& bcolumn=book1 && return= book1rdate  && cancel= book1idate"> <button id="primary">Return</button></center></a></td>
  </tr>
  <?php
}
}
else{
    ?>
    <tr>
    <td colspan="7" scope="colgroup"><center><?php echo("no book");?></center></td>
</tr>
    <?php
}
if(!$b2==0)
{
    $query= "select * from book_data where bnumber= $b2 ";
    $result = mysqli_query($conn,$query);
    while($rows2 = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
    <td><center>2</center></td>
<td><center><?php echo $rows2['bname'];?></center></td>
<td><center><?php echo $rows2['aname'];?></center></td>
<td><center><?php echo $rows['book2idate'];?></center></td>
<td><center><?php echo $rows['book2rdate'];?></center></td>
<td><center><?php echo $rows2['bnumber'];?></center></td>
<td> <center><a href="book_return.php?eid=<?php echo ($id); ?>&& bnumber=<?php echo $rows2['bnumber'];?>&& bcolumn=book2 && return= book2rdate && cancel= book2idate">  <button id="primary">Return</button> </center></a> </td>
  </tr>
  <?php
}
}

else{
    ?>
    <tr>
    <td colspan="7" scope="colgroup"><center><?php echo("no book");?></center></td>
    </tr>
    <?php
}
if(!$b3==0)
{
    $query= "select * from book_data where bnumber= $b3 ";
    $result = mysqli_query($conn,$query);
    while($rows3= mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
    <td><center>3</center></td>
<td><center><?php echo $rows3['bname'];?></center></td>
<td><center><?php echo $rows3['aname'];?></center></td>
<td><center><?php echo $rows['book3idate'];?></center></td>
<td><center><?php echo $rows['book3rdate'];?></center></td>
<td><center><?php echo $rows3['bnumber'];?></center></td>
<td> <center><a href="book_return.php?eid=<?php echo ($id); ?>&& bnumber=<?php echo $rows3['bnumber'];?>&& bcolumn=book3 && return= book3rdate && cancel= book3idate">  <button id="primary">Return</button></center> </a> </td>

  </tr>
  <?php
}
}else{
    ?>
    <tr>
    <td colspan="7" scope="colgroup"><center><?php echo("no book");?></center></td>
    </tr>

    <?php
}
if(!$b4==0)
{
    $query= "select * from book_data where bnumber= $b4 ";
    $result = mysqli_query($conn,$query);
    while($rows4= mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
    <td><center>4</center></td>
<td><center><?php echo $rows4['bname'];?></center></td>
<td><center><?php echo $rows4['aname'];?></center></td>
<td><center><?php echo $rows['book4idate'];?></center></td>
<td><center><?php echo $rows['book4rdate'];?></center></td>
<td><center><?php echo $rows4['bnumber'];?></center></td>
<td> <center> <a href="book_return.php?eid=<?php echo ($id); ?>&& bnumber=<?php echo $rows4['bnumber'];?>&& bcolumn=book4 && return= book4rdate && cancel= book4idate"> <button id="primary">Return</button></center></a>  </td>

  </tr>
  
<?php
}
}
else{
    ?>
    <tr>
    <td colspan="7" scope="colgroup"><center><?php echo("no book");?></center></td>
    </tr>

    <?php
}
if(!$b5==0)
{
    $query= "select * from book_data where bnumber= $b5 ";
    $result = mysqli_query($conn,$query);
    while($rows5= mysqli_fetch_assoc($result))
    {
        ?>
    <tr>
    <td><center>5</center></td>
<td><center><?php echo $rows5['bname'];?></center></td>
<td><center><?php echo $rows5['aname'];?></center></td>
<td><center><?php echo $rows['book5idate'];?></center></td>
<td><center><?php echo $rows['book5rdate'];?></center></td>
<td><center><?php echo $rows5['bnumber'];?></center></td>
<td> <center><a href="book_return.php?eid=<?php echo ($id); ?>&& bnumber=<?php echo $rows5['bnumber'];?>&& bcolumn=book5 && return= book5rdate && cancel= book5idate"> <button id="primary">Return</button></center></a>  </td>

  </tr>


<?php
}}else{
    ?>
    <tr>
    <td colspan="7" scope="colgroup"><center><?php echo("no book");?></center></td>
   </tr>
    <?php
}}}
?>
</table>
</div>
</div>
</div>
    
<!-- <form class="dj"> -->
<style>
.mrcoder{
    margin-top: -950px;
    margin-left: 700px;
    

}
.mrcoder #tableody {
    margin-top: 510px;
    border:2px black solid;
    padding: 20px;
    text-align: center;
    font-size:20px;
    /* font-color:black; */
    color:black;    
    
}
.mrcoder #tableody , thead, tr ,th, td{
    color:black;
}
#backbtn{
    margin-left: 20px;
}
@media (max-width:1400px) {
    /* .main-card{
        display:block;
        width:200%;
        align-self: center;
    } */
    body{
        height:120vh;
        
    }
    
        div#main-card {
    margin-top: 70px;
    margin-left: 30px;
    max-width: 783px;
    height: 450px;
    box-shadow: -5px 2px 18px 4px #ccc;
        margin-left:200px;
}
    .mrcoder{
        margin-top:-400px;
        margin-left:20%;
    }
    .contact{
        width:780px;
    }
    .content{
        margin-left:100px;
    }
    .cover-photo{
        width:780px;
    }
    .tablep{
        width:400px;
        z-index: 0;
    }
    td{
        margin:50px;
        font-size:10px;
    }
    
}
</style>
<div class="mrcoder">
                    <table id="tableody">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Book Name</th>
                                <th>Author Name</th>
                                <th>Book Quantity</th>
                                <th>Book number</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                           
                                    $queryr = "SELECT * FROM book_data ";
                                    $query_runer = mysqli_query($conn, $queryr);
                                    while($rowsq = mysqli_fetch_assoc($query_runer))
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $rowsq['id']; ?></td>
                                                <td><?php echo $rowsq['bname']; ?></td>
                                                <td><?php echo $rowsq['aname']; ?></td>
                                                <td><?php echo $rowsq['bqty']; ?></td>
                                                <td><?php echo $rowsq['bnumber']; ?></td>
                                                <td><a href="add_book.php?bnumber=<?php echo $rowsq['bnumber'];?>&&eid=<?php echo ($id); ?>"><button  class="btn btn-primary">Add Book<br></button></a></td>
                                            </tr>
                                            <?php
                                        }
                                    
                                    ?>
                        </tbody>
                    </table>
                    <br>
                    <a href="admin_dashboard.php"><button id="backbtn" class="btn btn-primary">Back <br></button></a>
         </div>
    <!-- </form> -->
</form>
<footer class="ft">
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