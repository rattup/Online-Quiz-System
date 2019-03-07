<?php
$email=$_POST['email'];
$user=$_POST['username'];
$pass=$_POST['password'];
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
$mail = new PHPMailer(true);                              
try {
    $mail->isSMTP(); // using SMTP protocol                                     
    $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
    $mail->SMTPAuth = true;  // enable smtp authentication                             
    $mail->Username = 'ratneshpal74@gmail.com';  // sender gmail host              
    $mail->Password = '17861786'; // sender gmail host password                          
    $mail->SMTPSecure = 'tls';  // for encrypted connection                           
    $mail->Port = 587;   // port for SMTP     

    $mail->setFrom('ratneshpal74@gmail.com', "ratnesh"); // sender's email and name
    $mail->addAddress($email,$user );  // receiver's email and name

    $mail->Subject = 'registration';
    $mail->Body    = 'Successfully registered on quiz mania';

    $mail->send();
   header('location:http://localhost/quiz/Validation.php');
  
} catch (Exception $e) { // handle error.
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
