<?php
  use PHPMailer\PHPMailer\PHPMailer;
  require 'vendor/autoload.php';
  
  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.office365.com";
  $mail->Username   = "web@tvarit.com";
  $mail->Password   = "Th3syst3mhasfailed123@";

  $mail->IsHTML(true);
  $mail->AddAddress("indra@insessor.com", "Sumesh");
  $mail->SetFrom("web@tvarit.com", "INDRA A");
  $mail->AddReplyTo("web@tvarit.com", "indrakkk");
//   $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = "Test is Test Email sent via SMTP Server";
  $content = "<b>This is a Test Email sent via SMTP Server.</b>";

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