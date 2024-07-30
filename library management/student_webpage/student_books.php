<?php
include 'student_index.php';
include '../dbconnection.php';

if($_SESSION['student_logged_in'])
{
    $id= $_SESSION['student_logged_in'];
    $querys = "SELECT * FROM student_data WHERE eid= '$id' ";
    $resultg = mysqli_query($conn,$querys);
    while($row = mysqli_fetch_assoc($resultg))
    {
        $b1= $row['book1'];
        $b2= $row['book2'];
        $b3= $row['book3'];
        $b4= $row['book4'];
        $b5= $row['book5'];
        


?>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<style>
    /* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

/* NavbarTop */
.navbar-top {
    height: 70px;
}

.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
    color:black;
    border-bottom:2px solid #fff;
}
/* Main */
.main63 {
    /* margin-top: 2%; */
    /* margin-left: 20%; */
    font-size: 15px;
    padding: 0 10px;
    /* width: 70%; */
    color:black;
}

.main63 h2 {
    color:black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
    border-bottom:2px solid #fff;
    border-bottom:2px solid #fff;
}

.main63 .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 5px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 20px 20px 20px;
}
.card-body{
    padding-left: 30px;
    position: center;
    padding-right: 0px;
}
.card-body td {
    margin: 10px;
    text-align: center;
    border: radius 10%;
    /* border:2px solid black; */
}
.main63 .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

/* End */


.tbl1 tbody tr {
      background-color: white;
      border-bottom: 1px solid black;
}
.tbl1 tbody tr: last-of-time {
      background-color: white;
      border-top: 2px solid #009879;
}
.tbl1{
    border-radius: 5px 5px 0 0 ;
    overflow: hidden;
}
</style>

<body >
<div class="navbar-top">
    <div class="title">
        <h1>My Books</h1>
    </div>
</div>
<!-- end -->
    <!-- Main -->
    <div class="main63">
        <h2><a>List of Books</a></h2>
        <div class="card">
            <div class="card-body">
                <table class='tbl1'>
                    <tbody>
                        <tr>
                    
                            <td><b>ID</b></td>
                            <td><b>Book Name</b></td>
                            <td><b>Auther Name</b></td>
                            <td><b>Book Price</b></td>
                            <td><b>Book number </b></td>
                            <td><b>Issue Date </b></td>
                            <td><b>Return Date </b></td>
                            <td><b>Fine</b></td>
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
                            <td>1</td>
                            <td><?php echo $rowaa['bname'];?></td>
                            <td><?php echo $rowaa['aname'];?></td>
                            <td><?php echo $rowaa['bprice'];?></td>
                            <td><?php echo $rowaa['bnumber'];?></td>
                            <td><?php echo $row['book1idate'];?></td>
                            <td><?php echo $row['book1rdate'];?></td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <?php
                            }
                        }
                            else{

                                ?>
                                <tr>

                                
                                <td colspan="6" scope="colgroup">No Book Data found</td>
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
                            <td>2</td>
                            <td><?php echo $rows2['bname'];?></td>
                            <td><?php echo $rows2['aname'];?></td>
                            <td><?php echo $rows2['bprice'];?></td>
                            <td><?php echo $rows2['bnumber'];?></td>
                            <td><?php echo $row['book2idate'];?></td>
                            <td><?php echo $row['book2rdate'];?></td>
                            <td>30</td>

                        </tr> 
                        <tr>
                        <?php
                            }
                        }else{

                            ?>
                            <tr>

                            
                            <td colspan="6" scope="colgroup">No Book Data found</td>
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
                            <td>3</td>
                            <td><?php echo $rows3['bname'];?></td>
                            <td><?php echo $rows3['aname'];?></td>
                            <td><?php echo $rows3['bprice'];?></td>
                            <td><?php echo $rows3['bnumber'];?></td>
                            <td><?php echo $row['book3idate'];?></td>
                            <td><?php echo $row['book3rdate'];?></td>
                            <td>30</td>
                        </tr>
                        <tr>
                        <?php
                            }
                        }else{

                            ?>
                            <tr>

                            
                            <td colspan="6" scope="colgroup">No Book Data found</td>
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
                            <td>4</td>
                            <td><?php echo $rows4['bname'];?></td>
                            <td><?php echo $rows4['aname'];?></td>
                            <td><?php echo $rows4['bprice'];?></td>
                            <td><?php echo $rows4['bnumber'];?></td>
                            <td><?php echo $row['book4idate'];?></td>
                            <td><?php echo $row['book4rdate'];?></td>
                            <td>30</td>
                        </tr>
                        <tr>
                        <?php
                            }
                        }else{

                            ?>
                            <tr>

                            
                            <td colspan="6" scope="colgroup">No Book Data found</td>
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
                            <td>5</td>
                            <td><?php echo $rows5['bname'];?></td>
                            <td><?php echo $rows5['aname'];?></td>
                            <td><?php echo $rows5['bprice'];?></td>
                            <td><?php echo $rows5['bnumber'];?></td>
                            <td><?php echo $row['book5idate'];?></td>
                            <td><?php echo $row['book5rdate'];?></td>
                            <td>0</td>
                        </tr>                        
                    </tbody>
                </table>
                
            </div>
            
        </div>
        <?php
        }
    }else{

        ?>
        <tr>

        
        <td colspan="6" scope="colgroup">No Book Data found</td>
        </tr>
        <?php
    }} }
    ?>
    </div>

</body>

</html>