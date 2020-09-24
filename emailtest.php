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
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "gkuda24@gmail.com";
  $mail->Password   = "insessor13579";

  $mail->IsHTML(true);
  $mail->AddAddress("indra@insessor.com", "Sumesh");
  $mail->SetFrom($mail->Username, "INDRA A");
  $mail->AddReplyTo($mail->Username, "indrakkk");
//   $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

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