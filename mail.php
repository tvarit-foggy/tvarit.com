<?php
  include 'config.php';  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["sub"];
  $phone = $_POST["phone"];
  $msg = $_POST["msg"];
  $to = "$email";
  $message = "
  Dear $name,
             Thank you very much for contacting us. here is your message. Our team will contact you soon.
  
  Email:   $email  
  Phone:   $phone
  Subject: $subject
  Message: $msg 
  
  Kind Regards,
  Tvarit Team

  Tvarit GmbH
  Gundelandstrasse 5
  60435 Frankfurt am Main
 
  This message contains information that may be privileged or confidential and is the property of the Tvarit GmbH. It is intended only for the person to whom it is addressed. If you are not the intended recipient, you are not authorized to read, print, retain copy, disseminate, distribute, or use this message or any part thereof. If you receive this message in error, please notify the sender immediately and delete all copies of this message.
";

  $headers  = "From: $mail_from\r\n" .
  "X-Mailer: php\r\n";
  $headers .= "Bcc: $mail_from\r\n";

  mail($to,$subject,$message,$headers);
   
?>  