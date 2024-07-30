<?php
include 'student_index.php';
include '../dbconnection.php';

$query= "select * from book_data ";
$result = mysqli_query($conn,$query);

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
<head>
<style>
        .card-body{
        /* margin-top:0px; */
        margin-bottom:100px;
    }
    </style>
    
</head>
<body class="">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card">
                       <h2 class="display-6"><center><b>Available/All Books in Library</b></center></h2>
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
                                <td><b>Book name</b></td>
                                <td><b>Author name</b></td>
                                <td><b>Semister</b></td>
                                <td><b>Department</b></td>
                                <td><b>Book Quantity</b></td>
                                <!-- <td><b>Book Location</b></td> -->
                                <td><b>Book price</b></td>
                                <td><b>Book Number</b></td>
                                <td><b>Issue Date</b></td>
                                <td><b>Activity</b></td>
                                
                            </tr>
                            <tr>
                                <?php
                                while($rows = mysqli_fetch_assoc($result))
                                {
                                    ?>
                                    <td><?php echo $rows['id'];?></td>
                                    <td><?php echo $rows['bname'];?></td>
                                    <td><?php echo $rows['aname'];?></td>
                                    <td><?php echo $rows['sem'];?></td>
                                    <td><?php echo $rows['dep'];?></td>
                                    <td><?php echo $rows['bqty'];?></td>
                                    <td><?php echo $rows['bprice'];?></td>
                                    <td><?php echo $rows['bnumber'];?></td>
                                    <td><?php echo $rows['idate'];?></td>
                                    <td><a href="request_book.php?bnumber=<?php echo $rows['bnumber'];?>" style="text-decoration:none"><button class="btn btn-primary">View Book</button></a></td>
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
    <footer>
  <center>
<div class="copyright"> © 2023 Copyright By Sveri's College of Poly, Pandharpur Designed and Developed By Aviraj Salunkhe, Atharv Kulkarni,<br> Shriniwas Kulkarni, Pravin Jadhav. Under The Guidance of G.S.Misal Sir. </div>
<p> All Rights Reserved.<br>
  <a href="mailto:avirajsalunkhe1@gmail.com"><img style="width:20px; height:20px;" src="../mail.png"></img></a>
    <a href="https://www.instagram.com/its_avi_45_/"><img style="width:20px; height:20px;"src="../insta.png"></img></a>
    </p>
    </center>
</footer> 
</body>
</html>