<?php 
 include 'config.php';  
 use PHPMailer\PHPMailer\PHPMailer;
 require 'vendor/autoload.php';
 
 $mail = new PHPMailer();
 $mail->IsSMTP();

 $mail->SMTPDebug  = 0;  
 $mail->SMTPAuth   = TRUE;
 $mail->SMTPSecure = "tls";
 $mail->Port       = 587;
 $mail->Host       = "smtp.office365.com";
 $mail->Username   = $mail_from;
 $mail->Password   = $mail_password;
 ?>