<?php
  include 'mail-config.php';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["sub"];
  $phone = $_POST["phone"];
  $msg = $_POST["msg"];
  $to = "$email";
  $message = "
  Dear <b> $name </b>, <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Thank you very much for contacting us. here is your message. Our team will contact you soon.</b>
             <br><br>
  Email:  &nbsp;&nbsp; $email <br>  
  Phone:  &nbsp;&nbsp; $phone <br>
  Subject: &nbsp;&nbsp;$subject <br>
  Message: &nbsp;&nbsp;$msg  <br><br>
  
  Kind Regards,<br>
  Tvarit Team<br>
  <br><br>
  Tvarit GmbH<br>
  Gundelandstrasse 5<br>
  60435 Frankfurt am Main<br>
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