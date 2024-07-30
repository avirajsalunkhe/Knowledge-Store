<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
//Load Composer's autoloader
require 'vendor/autoload.php';
$_SESSION['generate_pdf']= $_POST['eid'];;
include "pdf.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sveripolylibrary1074@gmail.com';       //SMTP username
    $mail->Password   = 'syxcgmyukvgtttsx';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sveripolylibrary1074@gmail.com', 'Library');
    $mail->addAddress($eid, 'Student');     //Add a recipient
    $mail->addReplyTo('sveripolylibrary1074@gmail.com', 'Support/Help');

    //Attachments

    $mail->addAttachment('studentid.pdf');         //Add attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'About Your Library Account';
    $mail->Body    = 'Welcome '.$fname.',<br>
    Your registration for library is done,<br>
 now you can login by below credentials.<br><br>
    Username:- '.$eid.'<br>
    Password:- '.$psd1.'<br>
   <br><br>
 For any query mail us on <a>sveripolylibrary1074@gmail.com</a>' ;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script type="text/javascript">';
               echo ' alert("Registered successfully....")';
               echo '</script>';
} catch (Exception $e) {
               echo '<script type="text/javascript">';
               echo 'alert("Mail could not be sent. Mailer Error: {$mail->ErrorInfo}")';
               echo '</script>';
}

?>