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

  $mail->IsHTML(true);
  $mail->AddAddress($mail_from, "Sumesh");
  $mail->SetFrom($mail_from, "Sumesh");
  $mail->AddReplyTo("sumesh.surendran@tvarit.com", "Sumesh");
//   $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = "Test is Test Email sent via One.com SMTP Server using PHP Mailer";
  $content = "<b>This is a Test Email sent via One.com SMTP Server using PHP mailer class.</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    echo "<br>";
    echo "<br>";
    var_dump($mail);
  } else {
    echo "<br>";
    echo "Email sent successfully";
  }
?>
