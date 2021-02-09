<?php
  include 'mail-config.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $phone = $_POST["phone"];
  $page = trim($_GET["page"]);
  $to = $email;
  $downloadLinks = "";
  $downloadLinksOther = "";

  $MoldingProcess = "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Molding+Process.pdf\">Molding Process</a>";
  $PredictiveMaintenance = "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Predictive+Maintenance.pdf\">Predictive Maintenance</a>";
  $ProductionPlanning =  "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Production+Planning.pdf\">Production Planning</a>";
  $QualityOptimization =  "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Quality+Optimization.pdf\">Quality Optimization</a>";

  if ($page == "Molding Process") {
    $downloadLinks = $MoldingProcess;

    $downloadLinksOther = "
    $PredictiveMaintenance<br>
    $ProductionPlanning<br>
    $QualityOptimization";

  }else if ($page == "Predictive Maintenance") {
    $downloadLinks = $PredictiveMaintenance;

    $downloadLinksOther = "
    $MoldingProcess<br>
    $ProductionPlanning<br>
    $QualityOptimization";
  }else if ($page == "Production Planning") {
    $downloadLinks = $ProductionPlanning;

    $downloadLinksOther = "
    $MoldingProcess<br>
    $PredictiveMaintenance<br>
    $QualityOptimization";
  }else if ($page == "Quality Optimization") {
    $downloadLinks = $QualityOptimization;

    $downloadLinksOther = "
    $MoldingProcess<br>
    $PredictiveMaintenance<br>
    $ProductionPlanning";
  }

  $message = "

<div style=\"padding:20px; background:#eee;\">
  <div style=\"width:80%; margin:auto;\">
    <div><img src='https://beta.tvarit.com/img/contactBg2.jpg'/></div>
    <div style=\"background#fff; padding:20px; margin-top:20px;\">
      <div style=\"font-size:15px; line-height:30px;\">Dear <b>$name</b>,</div>
      <div style=\"margin:20px 0px 0px 0px;\">
        Thank you for showing interest in our solutions. Please find the $downloadLinks use-case here.<br>
        You can also refer to our other use-cases as below:-<br>
        $downloadLinksOther

        If you would like to have any further information on this, please email us on <a href='#'>info@tvarit.com</a>.  Our team will be contacting you shortly.
        <br><br>
        <strong>Best Regards,</strong><br> Tvarit Team
      </div>
    </div>
    <div style=\"text-align:center\">
      <div style=\"margin:20px 0px 0px 0px; padding:20px 0px 0px 0px; border-top:3px #333 solid;\"><br>Mail: <a href=\"info@tvarit.com\">info@tvarit.com</a><br>Web: <a href='https://www.tvarit.com'>www.tvarit.com</a><br>Follow us on: <a href='https://www.linkedin.com/company/13015039'>Linkedin</a><br>EU H2020 winner of the best Industrial AI solution among 490 AI companies in Europe.</div>
      <div style=\"margin:0px 0px 30px 0px; padding:0px 0px 20px 0px; border-bottom:3px #333 solid;\"><img src='https://beta.tvarit.com/img/signature-img.png'/></div>
      <div style=\"font-size:11px; margin:0px 0px 20px 0px\">
      <strong>Tvarit GmbH</strong><br>
      Geschäftsführer: Suhas Patel & Rahul Prajapat<br>
      Hanauer Landstra&beta;e 521,<br>
      60386 Frankfurt am Main, Germany<br>
      Registergericht: Frankfurt am Main | Handelsregisternummer: HR B 114845
      <br><br>
      <strong>IMPRESSUM</strong><br>
      Die in dieser Email und deren Anlagen enthaltenen Informationen sind vertraulich und nur für den vorgesehenen Empfänger bestimmt. Jegliche unautorisierte Verbreitung, Verwendung oder das Kopieren dieser Nachricht und deren Anlagen sind nicht gestattet. Sollten Sie nicht der richtige Adressat sein oder diese E-Mail irrtümlich erhalten haben, informieren Sie bitte sofort den Absender und entfernen Sie diese Email umgehend aus Ihrem System. Tvarit GmbH übernimmt keine Haftung für die fehlerfreie und vollständige Übertragung dieser Nachricht. <br><br>
      <strong>DISCLAIMER</strong><br>
      The information contained in this e-mail and any attachments are confidential, may be subject to legal privilege, and is intended solely for the use of the addressee. Any unauthorized dissemination or copying of this e-mail or its attachments and any use or disclosure of any information contained in them is strictly prohibited and may be illegal. If you have received this e-mail in error, please notify us immediately. The e-mail transmission and any attachments must be deleted from your system. Tvarit GmbH does not bear any responsibility for the accuracy or completeness of its transmission
      </div>
    </div>
  </div>
</div>


";

$messageTvarit = "
Dear Tvarit,<br><br>
&nbsp;&nbsp;&nbsp;Please find the Use case request details,<br><br>
  Name:    $name<br>
  Email:   $email  <br>
  Phone:   $phone<br>
  Company: $company<br>
  Requested Use-Case: $page<br>

";

$mail_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div>
        <p>'.$message.'</p>
</div>
</body>
</html>';

  $subject = "Tvarit Use case request";
  $mail->IsHTML(true);
  $mail->AddAddress($to, $name);
  $mail->SetFrom($mail_from, "Tvarit GmbH");
  $mail->Subject = $subject;

  $mail->MsgHTML($message);
  if($mail->send()){
    $mail->ClearAddresses();
    $mail->AddAddress($mail_from);
    $mail->addBCC($mail_bcc);
    $mail->MsgHTML($messageTvarit);
    if($mail->send()){
      echo 'Message has been sent';
    }
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
