<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
//Load Composer's autoloader
require 'vendor/autoload.php';
// include '../dbconnection.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$query= "select * from student_data ";
$result = mysqli_query($conn,$query);
$mob = Array();
$ct=0;
while ($rows = mysqli_fetch_assoc($result)) {
    $eid= $rows["eid"];
    $mob[$ct]=$eid;
    $ct++;
}
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sveripolylibrary1074@gmail.com';       //SMTP username
    $mail->Password   = 'hrlzhxadlneqteod';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sveripolylibrary1074@gmail.com', 'Library');
    foreach($mob as $vL){
        $mail->addAddress($vL);     //Add a recipient
    }
    $mail->addReplyTo('sveripolylibrary1074@gmail.com', 'Support/Help');

    //Attachments

    // $mail->addAttachment('studentid.pdf');         //Add attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Book Added To Library';
    $mail->Body    = 'Dear Student,<br>
    New Books added to Library<br>
 Now you can get them from library.<br>
 
 <body>
 <table style="width:100%; border: 2px solid black;">
   <tr style="border: 2px solid black;">
     <th style="border: 2px solid black;">Book Name</th>
     <th style="border: 2px solid black;">Author Name</th> 
     <th style="border: 2px solid black;">Department</th>
     <th style="border: 2px solid black;">Semister</th>
     <th style="border: 2px solid black;">Book Quantity</th> 
     <th style="border: 2px solid black;">Book Price</th>
   </tr>
   <tr style="border: 2px solid black;">
     <td style="border: 2px solid black;">'.$bname.'</td>
     <td style="border: 2px solid black;">'.$aname.'</td> 
     <td style="border: 2px solid black;">'.$dep.'</td>
     <td style="border: 2px solid black;">'.$sem.'</td>
     <td style="border: 2px solid black;">'.$bqty.'</td> 
     <td style="border: 2px solid black;">'.$bprice.'</td>
   </tr>
 </table>
 </body><br>
   <br><br>
 For any query mail us on <a>sveripolylibrary1074@gmail.com</a>' ;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo '<script type="text/javascript">';
    echo 'alert("Mail could not be sent to '.$k.'. Mailer Error: {$mail->ErrorInfo}")';
    echo '</script>';
}
echo '<script type="text/javascript">';
echo ' alert("Book Registered successfully....")';
echo '</script>';
?>