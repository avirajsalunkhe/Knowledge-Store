<?php
include 'admin_index.php';

?>
<html>
<head>
<style>
    .ft{ 
        /* width:100%; */
        /* position:fixed; */
        bottom:0px;
       display:center;
       align_items:center;
       justify_content:center;
       /* left:38%; */
    }
    @media (max-width: 1200px){
   .col-md-12 {
    margin-left: 15%;
    
}}

    /* .card-body{ */
        /* margin-top:0px; */
        /* margin-bottom:100px;
    } */
    #myId{
    /* position: relative; */
    z-index: 0;
}
.card-body table{
    margin-bottom: 180px;
}
#preloader{
    background:#fff url(../loader.gif) no-repeat center center;
    background-size:25%;
    height:100vh;
    width:100%;
    position: fixed;
    z-index: 100;
}
    </style>
      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
         </head>
        <body>
        
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4><b><center>Book Distribution</center></b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">

                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                    <button id="myId" type="submit" class="btn btn-primary ownclass">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","library_management");
                                $cook ="SELECT * FROM student_data";
                                $query_runner = mysqli_query($con, $cook);
                                   ?> <tr>
                                <?php
                                if(!isset($_GET['search']))
                                {
                                while($ro = mysqli_fetch_assoc($query_runner))
                                {
                                    ?>
                                    <td><?php echo $ro['id'];?></td>
                                    <td><?php echo $ro['fname'];?></td>
                                    <td><?php echo $ro['lname'];?></td>
                                    <td><?php echo $ro['eid'];?></td>
                                    <td><a href="user_account.php?eid=<?php echo $ro['eid'];?>"><button  class="btn btn-primary">View account <br></button></a></td>

                                </tr>
<?php


                                }}
                                elseif(isset($_GET['search']))
                                {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM student_data WHERE CONCAT(fname,lname,eid) LIKE '%$filtervalues%' ";
                                    $cook ="SELECT * FROM student_data";
                                    $query_run = mysqli_query($con, $query);
                                    $query_runner = mysqli_query($con, $cook);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $items['id']; ?></td>
                                                <td><?= $items['fname']; ?></td>
                                                <td><?= $items['lname']; ?></td>
                                                <td><?= $items['eid']; ?></td>
                                                <td><a href="user_account.php?eid=<?php echo $items['eid'];?>"><button  class="btn btn-primary">View account <br></button></a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="5"><center> No Record Found</center></td>
                                            </tr>
                                        <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

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
<script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load",function(){
            loader.style.display ="none";
        })
    </script>
</body>
</html>