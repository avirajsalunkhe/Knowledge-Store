<?php
include 'main.php';
include '../dbconnection.php';

$query1= "select count(dep) from book_data where dep='Information Technology';";
$query2= "select count(dep) from book_data where dep='Computer Engineering';";
$query3= "select count(dep) from book_data where dep='Electronics and Telecommunication';";
$query4= "select count(dep) from book_data where dep='Electrical Engineering';";
$query5= "select count(dep) from book_data where dep='Civil Engineering';";
$query6= "select count(dep) from book_data where dep='Mechanical Engineering';";
$query7= "select count(dep) from book_data where dep='Other';";

$result1 = mysqli_query($conn,$query1);
$result2 = mysqli_query($conn,$query2);
$result3 = mysqli_query($conn,$query3);
$result4 = mysqli_query($conn,$query4);
$result5 = mysqli_query($conn,$query5);
$result6 = mysqli_query($conn,$query6);
$result7 = mysqli_query($conn,$query7);

$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);
$row3 = mysqli_fetch_array($result3);
$row4 = mysqli_fetch_array($result4);
$row5 = mysqli_fetch_array($result5);
$row6 = mysqli_fetch_array($result6);
$row7 = mysqli_fetch_array($result7);


$querysa1= "select COUNT(*) from book_data where (dep='Information Technology' AND sem='Semester 1');";
$querysa2= "select COUNT(*) from book_data where (dep='Information Technology' AND sem='Semester 2');";
$querysa3= "select COUNT(*) from book_data where (dep='Information Technology' AND sem='Semester 3');";
$querysa4= "select COUNT(*) from book_data where (dep='Information Technology' AND sem='Semester 4');";
$querysa5= "select COUNT(*) from book_data where (dep='Information Technology' AND sem='Semester 5');";
$querysa6= "select COUNT(*) from book_data where (dep='Information Technology' AND sem='Semester 6');";

$resultsa1 = mysqli_query($conn,$querysa1);
$resultsa2 = mysqli_query($conn,$querysa2);
$resultsa3 = mysqli_query($conn,$querysa3);
$resultsa4 = mysqli_query($conn,$querysa4);
$resultsa5 = mysqli_query($conn,$querysa5);
$resultsa6 = mysqli_query($conn,$querysa6);

$rowsa1 = mysqli_fetch_array($resultsa1);
$rowsa2 = mysqli_fetch_array($resultsa2);
$rowsa3 = mysqli_fetch_array($resultsa3);
$rowsa4 = mysqli_fetch_array($resultsa4);
$rowsa5 = mysqli_fetch_array($resultsa5);
$rowsa6 = mysqli_fetch_array($resultsa6);

$querysb1= "select COUNT(*) from book_data where (dep='Computer Engineering' AND sem='Semester 1');";
$querysb2= "select COUNT(*) from book_data where (dep='Computer Engineering' AND sem='Semester 2');";
$querysb3= "select COUNT(*) from book_data where (dep='Computer Engineering' AND sem='Semester 3');";
$querysb4= "select COUNT(*) from book_data where (dep='Computer Engineering' AND sem='Semester 4');";
$querysb5= "select COUNT(*) from book_data where (dep='Computer Engineering' AND sem='Semester 5');";
$querysb6= "select COUNT(*) from book_data where (dep='Computer Engineering' AND sem='Semester 6');";

$resultsb1 = mysqli_query($conn,$querysb1);
$resultsb2 = mysqli_query($conn,$querysb2);
$resultsb3 = mysqli_query($conn,$querysb3);
$resultsb4 = mysqli_query($conn,$querysb4);
$resultsb5 = mysqli_query($conn,$querysb5);
$resultsb6 = mysqli_query($conn,$querysb6);

$rowsb1 = mysqli_fetch_array($resultsb1);
$rowsb2 = mysqli_fetch_array($resultsb2);
$rowsb3 = mysqli_fetch_array($resultsb3);
$rowsb4 = mysqli_fetch_array($resultsb4);
$rowsb5 = mysqli_fetch_array($resultsb5);
$rowsb6 = mysqli_fetch_array($resultsb6);

$querysc1= "select COUNT(*) from book_data where (dep='Electronics and Telecommunication' AND sem='Semester 1');";
$querysc2= "select COUNT(*) from book_data where (dep='Electronics and Telecommunication' AND sem='Semester 2');";
$querysc3= "select COUNT(*) from book_data where (dep='Electronics and Telecommunication' AND sem='Semester 3');";
$querysc4= "select COUNT(*) from book_data where (dep='Electronics and Telecommunication' AND sem='Semester 4');";
$querysc5= "select COUNT(*) from book_data where (dep='Electronics and Telecommunication' AND sem='Semester 5');";
$querysc6= "select COUNT(*) from book_data where (dep='Electronics and Telecommunication' AND sem='Semester 6');";

$resultsc1 = mysqli_query($conn,$querysc1);
$resultsc2 = mysqli_query($conn,$querysc2);
$resultsc3 = mysqli_query($conn,$querysc3);
$resultsc4 = mysqli_query($conn,$querysc4);
$resultsc5 = mysqli_query($conn,$querysc5);
$resultsc6 = mysqli_query($conn,$querysc6);

$rowsc1 = mysqli_fetch_array($resultsc1);
$rowsc2 = mysqli_fetch_array($resultsc2);
$rowsc3 = mysqli_fetch_array($resultsc3);
$rowsc4 = mysqli_fetch_array($resultsc4);
$rowsc5 = mysqli_fetch_array($resultsc5);
$rowsc6 = mysqli_fetch_array($resultsc6);

$querysd1= "select COUNT(*) from book_data where (dep='Electrical Engineering' AND sem='Semester 1');";
$querysd2= "select COUNT(*) from book_data where (dep='Electrical Engineering' AND sem='Semester 2');";
$querysd3= "select COUNT(*) from book_data where (dep='Electrical Engineering' AND sem='Semester 3');";
$querysd4= "select COUNT(*) from book_data where (dep='Electrical Engineering' AND sem='Semester 4');";
$querysd5= "select COUNT(*) from book_data where (dep='Electrical Engineering' AND sem='Semester 5');";
$querysd6= "select COUNT(*) from book_data where (dep='Electrical Engineering' AND sem='Semester 6');";

$resultsd1 = mysqli_query($conn,$querysd1);
$resultsd2 = mysqli_query($conn,$querysd2);
$resultsd3 = mysqli_query($conn,$querysd3);
$resultsd4 = mysqli_query($conn,$querysd4);
$resultsd5 = mysqli_query($conn,$querysd5);
$resultsd6 = mysqli_query($conn,$querysd6);

$rowsd1 = mysqli_fetch_array($resultsd1);
$rowsd2 = mysqli_fetch_array($resultsd2);
$rowsd3 = mysqli_fetch_array($resultsd3);
$rowsd4 = mysqli_fetch_array($resultsd4);
$rowsd5 = mysqli_fetch_array($resultsd5);
$rowsd6 = mysqli_fetch_array($resultsd6);
$queryse1= "select COUNT(*) from book_data where (dep='Civil Engineering' AND sem='Semester 1');";
$queryse2= "select COUNT(*) from book_data where (dep='Civil Engineering' AND sem='Semester 2');";
$queryse3= "select COUNT(*) from book_data where (dep='Civil Engineering' AND sem='Semester 3');";
$queryse4= "select COUNT(*) from book_data where (dep='Civil Engineering' AND sem='Semester 4');";
$queryse5= "select COUNT(*) from book_data where (dep='Civil Engineering' AND sem='Semester 5');";
$queryse6= "select COUNT(*) from book_data where (dep='Civil Engineering' AND sem='Semester 6');";

$resultse1 = mysqli_query($conn,$queryse1);
$resultse2 = mysqli_query($conn,$queryse2);
$resultse3 = mysqli_query($conn,$queryse3);
$resultse4 = mysqli_query($conn,$queryse4);
$resultse5 = mysqli_query($conn,$queryse5);
$resultse6 = mysqli_query($conn,$queryse6);

$rowse1 = mysqli_fetch_array($resultse1);
$rowse2 = mysqli_fetch_array($resultse2);
$rowse3 = mysqli_fetch_array($resultse3);
$rowse4 = mysqli_fetch_array($resultse4);
$rowse5 = mysqli_fetch_array($resultse5);
$rowse6 = mysqli_fetch_array($resultse6);
$querysf1= "select COUNT(*) from book_data where (dep='Mechanical Engineering' AND sem='Semester 1');";
$querysf2= "select COUNT(*) from book_data where (dep='Mechanical Engineering' AND sem='Semester 2');";
$querysf3= "select COUNT(*) from book_data where (dep='Mechanical Engineering' AND sem='Semester 3');";
$querysf4= "select COUNT(*) from book_data where (dep='Mechanical Engineering' AND sem='Semester 4');";
$querysf5= "select COUNT(*) from book_data where (dep='Mechanical Engineering' AND sem='Semester 5');";
$querysf6= "select COUNT(*) from book_data where (dep='Mechanical Engineering' AND sem='Semester 6');";

$resultsf1 = mysqli_query($conn,$querysf1);
$resultsf2 = mysqli_query($conn,$querysf2);
$resultsf3 = mysqli_query($conn,$querysf3);
$resultsf4 = mysqli_query($conn,$querysf4);
$resultsf5 = mysqli_query($conn,$querysf5);
$resultsf6 = mysqli_query($conn,$querysf6);

$rowsf1 = mysqli_fetch_array($resultsf1);
$rowsf2 = mysqli_fetch_array($resultsf2);
$rowsf3 = mysqli_fetch_array($resultsf3);
$rowsf4 = mysqli_fetch_array($resultsf4);
$rowsf5 = mysqli_fetch_array($resultsf5);
$rowsf6 = mysqli_fetch_array($resultsf6);


$alldata="SELECT SUM(bqty) FROM book_data;";
$resultall = mysqli_query($conn,$alldata);
$rowall = mysqli_fetch_array($resultall);


$alldatab="SELECT SUM(orgbqty) FROM book_data;";
$resultallb = mysqli_query($conn,$alldatab);
$rowallb = mysqli_fetch_array($resultallb);

$alltypedata="SELECT count(*) FROM book_data;";
$resultalltype = mysqli_query($conn,$alltypedata);
$rowalltype = mysqli_fetch_array($resultalltype);



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
    @media max-width(1000px) {
        
    }
    .row>* {
    width: 150%;
    max-width: 200%;
        }
    </style>
</head>
<body class="">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card">
                       <h2 class="display-6"><center><b>All Library Book Records</b></center></h2>
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
                                <td><b>Department</b></td>
                                <td><b>Sem 1</b></td>
                                <td><b>Sem 2</b></td>
                                <td><b>Sem 3</b></td>
                                <td><b>Sem 4</b></td>
                                <td><b>Sem 5</b></td>
                                <td><b>Sem 6</b></td>
                                <td><b>Total No of Books</b></td>
                                
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Information Technology</td>
                                <td><?php echo $rowsa1['0']?></td>
                                <td><?php echo $rowsa2['0']?></td>
                                <td><?php echo $rowsa3['0']?></td>
                                <td><?php echo $rowsa4['0']?></td>
                                <td><?php echo $rowsa5['0']?></td>
                                <td><?php echo $rowsa6['0']?></td>
                                <td><center><?php echo $row1['0']?></center></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Computer Engineering</td>
                                <td><?php echo $rowsb1['0']?></td>
                                <td><?php echo $rowsb2['0']?></td>
                                <td><?php echo $rowsb3['0']?></td>
                                <td><?php echo $rowsb4['0']?></td>
                                <td><?php echo $rowsb5['0']?></td>
                                <td><?php echo $rowsb6['0']?></td>
                                <td><center><?php echo $row2['0']?></center></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Electronics and Telecommunication</td>
                                <td><?php echo $rowsc1['0']?></td>
                                <td><?php echo $rowsc2['0']?></td>
                                <td><?php echo $rowsc3['0']?></td>
                                <td><?php echo $rowsc4['0']?></td>
                                <td><?php echo $rowsc5['0']?></td>
                                <td><?php echo $rowsc6['0']?></td>
                                <td><center><?php echo $row3['0']?></center></td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Electrical Engineering</td>
                                <td><?php echo $rowsd1['0']?></td>
                                <td><?php echo $rowsd2['0']?></td>
                                <td><?php echo $rowsd3['0']?></td>
                                <td><?php echo $rowsd4['0']?></td>
                                <td><?php echo $rowsd5['0']?></td>
                                <td><?php echo $rowsd6['0']?></td>
                                <td><center><?php echo $row4['0']?></center></td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Civil Engineering</td>
                                <td><?php echo $rowse1['0']?></td>
                                <td><?php echo $rowse2['0']?></td>
                                <td><?php echo $rowse3['0']?></td>
                                <td><?php echo $rowse4['0']?></td>
                                <td><?php echo $rowse5['0']?></td>
                                <td><?php echo $rowse6['0']?></td>
                                <td><center><?php echo $row5['0']?></center></td>

                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Mechanical Engineering</td>
                                <td><?php echo $rowsf1['0']?></td>
                                <td><?php echo $rowsf2['0']?></td>
                                <td><?php echo $rowsf3['0']?></td>
                                <td><?php echo $rowsf4['0']?></td>
                                <td><?php echo $rowsf5['0']?></td>
                                <td><?php echo $rowsf6['0']?></td>
                                <td><center><?php echo $row6['0']?></center></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Other</td>
                                <td colspan="6" scope="colgroup"><center><?php echo $row7['0']?></center></td>
                                <td><center><?php echo $row7['0']?></center></td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Total Book Varieties In Library</td>
                                <td colspan="6" scope="colgroup"></td>
                                <td><center><b><?php echo $rowalltype['0']?></b></center></td>
                                
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Total Books Quantity Available Now</td>
                                <td colspan="6" scope="colgroup"></td>
                                <td><center><b><?php echo $rowall['0']?></b></center></td>

                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Total Books Quantity In Library</td>
                                <td colspan="6" scope="colgroup"></td>
                                <td><center><b><?php echo $rowallb['0']?></b></center></td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<?php

$query= "select * from book_data ";
$result = mysqli_query($conn,$query);

?>



<body class="">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card">
                       <h2 class="display-6"><center><b>Book records</b></center></h2>
                    </div>
                    <form action="" method="GET">
                    </form>
                    <div class="card-body">
                        <table class="table">
                            <tr class="tr">
                                
                                <td><b>Sr.No</b></td>
                                <td><b>Book name</b></td>
                                <td><b>Author name</b></td>
                                <td><b>Semester</b></td>
                                <td><b>Department</b></td>
                                <td><b>Book Quantity</b></td>
                                <td><b>Book price</b></td>
                                <td><b>Book Number</b></td>
                                <td><b>Issue Date</b></td>
                                
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
