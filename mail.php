<?php
  include 'mail-config.php';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["sub"];
  $phone = $_POST["phone"];
  $msg = $_POST["msg"];
  $to = "$email";
  $message = "
<div style=\"font-size:22px; line-height:30px; margin-bottom:30px\"><img src='https://www.tvarit.com/img/contactBg.jpg'/><div>
<div style=\"font-size:22px; line-height:30px; text-transform:uppercase;\">Dear<b> $name </b>,<div>
<div style=\"margin:30px 0px 20px 0px;\">Thank you very much for reaching out to us. We will be happy to assist you further by responding to your inquiry as soon as possible.</div>

<div><strongHere’s is your message</strong> (<strong>$msg</strong>)</div>

<div style=\"margin:20px 0px 20px 0px;\"><strong>Best Regards,</strong><br> Tvarit Team<br><strong>Mail:</strong> <a href=\"info@tvarit.com\">info@tvarit.com</a><br><strong>Web:</strong> <a href='https://www.tvarit.com'>www.tvarit.com</a><br><strong>Follow us on:</strong> <a href='https://www.linkedin.com/company/13015039'>Linkidin</a><br>EU H2020 winner of the best Industrial AI solution among 490 AI companies in Europe.
</div>

  <strong>Tvarit GmbH</strong><br>
  Gundelandstrasse 5<br>
  60435 Frankfurt am Main<br>
  Registergericht: Frankfurt am Main | Handelsregisternummer: HR B 114845<br>
  This message contains information that may be privileged or confidential and is the property of the Tvarit GmbH. It is intended only for the person to whom it is addressed. If you are not the intended recipient, you are not authorized to read, print, retain copy, disseminate, distribute, or use this message or any part thereof. If you receive this message in error, please notify the sender immediately and delete all copies of this message.
";
      $mail->IsHTML(true);
      $mail->AddAddress($to, $name);
      $mail->SetFrom($mail_from, "Tvarit GmbH");
      $mail->AddReplyTo($mail_from, "Tvarit GmbH");
      $mail->addBCC($mail_bcc);
      $mail->addBCC($mail_from);
      $mail->Subject = $subject;

      $mail->MsgHTML($message);
      if($mail->send()){
        echo 'Message has been sent';
    }else{
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>
