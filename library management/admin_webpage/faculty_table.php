<?php
include 'admin_index.php';
include '../dbconnection.php';

$query= "select * from admin_data ";
$result = mysqli_query($conn,$query);



?>
<html>
    <head>
    <style>.card-body{
        /* margin-top:0px; */
        margin-bottom:100px;
    }
    .col{
        margin-top: -6%;
    }
    @media (max-width:1200px) {
        .card{
            width:1005px;
            
        }
        .col{
            margin-left:-5%;
        }
        
    }
    @media (max-width: 1200px){
.container, .container-md, .container-sm {
    max-width: 1117px;
}}
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    </head>
    <body class="bg">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card">
                       <h2 class="display-6"><center><b>Admin records</b></center></h2>
                    </div>
                    <form action="" method="GET">
                    <!-- <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="Search data">
                            <button type="button" class="btn btn-primary">Search</button>
                            </div> -->
                    </form>
                    <div class="card-body">
                        <table class="table">
                            <tr class="tr">
                                
                                <td><b>Sr.No</b></td>
                                <td><b>First name</b></td>
                                <td><b>Last name</b></td>
                                <td><b>E-mail ID</b></td>
                                <td><b>Department name</b></td>
                                <td><b>Employee ID</b></td>
                                <td><b>Password </b></td>
                                <th colspan="2" scope="colgroup"><b>Activity</b></th>
                                
                            </tr>
                            <tr>
                                <?php
                                while($rowd = mysqli_fetch_assoc($result))
                                {
                                    ?>
                                    <td><?php echo $rowd['id'];?></td>
                                    <td><?php echo $rowd['fname'];?></td>
                                    <td><?php echo $rowd['lname'];?></td>
                                    <td><?php echo $rowd['eid'];?></td>
                                    <td><?php echo $rowd['dep'];?></td>
                                    <td><?php echo $rowd['enrno'];?></td>
                                    <td><?php echo $rowd['psd1'];?></td>
                                    <td><a href="update_faculty.php?eid=<?php echo $rowd['eid'];?>" class="btn1"><button class="btn btn-primary"> Edit </button ></a></td>
                                    <td><a href="delete_faculty.php?eid=<?php echo $rowd['eid'];?>" class="btn2"><button class="btn btn-primary"> Delete </button></a></td>
                                </tr>

                                    <?php
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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