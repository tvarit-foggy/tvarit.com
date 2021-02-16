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
 $mail->Host       = "send.one.com";
 $mail->Username   = $mail_from;
 $mail->Password   = $mail_password;
 $mail->CharSet  = 'UTF-8';
?>