<?php  
   
  $email = $_POST["email"];
  $subject = "Request for Tvarit's - Automated Predictive Analytics - software demo";
  $to = "$email";
  $message = "
  Dear Visitor,
               We received your request for demo of our product, 'Automated Predictive Analytics'.

  We will revert back to you with demo credentials.

  Kind Regards,
  Tvarit Team

  Tvarit GmbH
  Gundelandstrasse 5
  60435 Frankfurt am Main

This message contains information that may be privileged or confidential and is the property of the Tvarit GmbH. It is intended only for the person to whom it is addressed. If you are not the intended recipient, you are not authorized to read, print, retain copy, disseminate, distribute, or use this message or any part thereof. If you receive this message in error, please notify the sender immediately and delete all copies of this message. "
;
    $headers  = "From: demo@tvarit.com\r\n" .
  "X-Mailer: php\r\n";
  $headers .= "Bcc: demo@tvarit.com\r\n";
  
   mail($to,$subject,$message,$headers);
   
?>  