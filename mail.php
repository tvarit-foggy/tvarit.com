<?php
  include 'mail-config.php';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["sub"];
  $phone = $_POST["phone"];
  $msg = $_POST["msg"];
  $to = "$email";

  $message = "
<div><img style=\"width:450px;\" src='https://beta.tvarit.com/img/contactBg2.jpg'/></div>
<div style=\"font-size:15px; line-height:30px; margin-top:20px;\">Dear<b> $name </b>,</div>
<div style=\"margin:30px 0px 20px 0px;\">Thank you very much for reaching out to us. We will be happy to assist you further by responding to your inquiry as soon as possible.</div>

<div><strong>Here's the information you submitted:</strong></div>

<table style=\"border:1px #eee solid; border-collapse:collapse;\">
  <tr>
    <th style=\"padding:10px; border:1px #eee solid;\">Email:</th>
    <td style=\"padding:10px; border:1px #eee solid;\">$email</td>
  </tr>
  <tr>
    <th style=\"padding:10px; border:1px #eee solid;\">Phone:</th>
    <td style=\"padding:10px; border:1px #eee solid;\">$phone</td>
  </tr>
  <tr>
    <th style=\"padding:10px; border:1px #eee solid;\">Subject:</th>
    <td style=\"padding:10px; border:1px #eee solid;\">$subject</td>
  </tr>
  <tr>
    <th style=\"padding:10px; border:1px #eee solid;\">Message:</th>
    <td style=\"padding:10px; border:1px #eee solid;\">$msg</td>
  </tr>
</table>

<div style=\"margin:20px 0px 20px 0px;\"><strong>Best Regards,</strong><br> Tvarit Team<br>Mail: <a href=\"info@tvarit.com\">info@tvarit.com</a><br>Web: <a href='https://www.tvarit.com'>www.tvarit.com</a><br>Follow us on: <a href='https://www.linkedin.com/company/13015039'>LinkedIn</a><br>EU H2020 winner of the best Industrial AI solution among 490 AI companies in Europe.</div>
<div style=\"margin:0px 0px 30px 0px\"><img src='https://beta.tvarit.com/img/new-sig.png'/></div>
<div style=\"font-size:11px; margin:0px 0px 20px 0px\">
<strong>Tvarit GmbH</strong><br>
Geschäftsführer: Suhas Patel & Rahul Prajapat<br>
Hanauer Landstra&beta;e 521,<br>
60386 Frankfurt am Main, Germany<br><br>
This message contains information that may be privileged or confidential and is the property of the Tvarit GmbH. It is intended only for the person to whom it is addressed. If you are not the intended recipient, you are not authorized to read, print, retain copy, disseminate, distribute, or use this message or any part thereof. If you receive this message in error, please notify the sender immediately and delete all copies of this message.
<br><br>
<strong>IMPRESSUM</strong><br>
Die in dieser Email und deren Anlagen enthaltenen Informationen sind vertraulich und nur für den vorgesehenen Empfänger bestimmt. Jegliche unautorisierte Verbreitung, Verwendung oder das Kopieren dieser Nachricht und deren Anlagen sind nicht gestattet. Sollten Sie nicht der richtige Adressat sein oder diese E-Mail irrtümlich erhalten haben, informieren Sie bitte sofort den Absender und entfernen Sie diese Email umgehend aus Ihrem System. Tvarit GmbH übernimmt keine Haftung für die fehlerfreie und vollständige Übertragung dieser Nachricht. <br><br>
<strong>DISCLAIMER</strong><br>
The information contained in this e-mail and any attachments are confidential, may be subject to legal privilege, and is intended solely for the use of the addressee. Any unauthorized dissemination or copying of this e-mail or its attachments and any use or disclosure of any information contained in them is strictly prohibited and may be illegal. If you have received this e-mail in error, please notify us immediately. The e-mail transmission and any attachments must be deleted from your system. Tvarit GmbH does not bear any responsibility for the accuracy or completeness of its transmission
</div>

";
      $mail->IsHTML(true);
      $mail->AddAddress($to, $name);
      $mail->SetFrom($mail_from, "Tvarit GmbH");
      $mail->AddReplyTo($mail_from, "Tvarit GmbH");
      $mail->addBCC($mail_bcc);
      $mail->addBCC($mail_from);
      $mail->Subject = "Thank you for your interest in Tvarit GmbH";

      $mail->MsgHTML($message);
      if($mail->send()){
        echo 'Message has been sent';
    }else{
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>