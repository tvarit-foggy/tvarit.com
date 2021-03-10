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

  $MoldingProcess = "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/TVARIT.Aluminum.Die.Casting.-.Prescriptive.Quality.pdf\">Aluminum Die Casting – Prescriptive Quality</a>";
  $PredictiveMaintenance = "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/TVARIT.Drive.Motors.-.Predictive.Maintenance.pdf\">Drive Motors – Predictive Maintenance</a>";
  $ProductionPlanning =  "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/TVARIT.Production.Planning.with.TiA.pdf\">Production Planning with TiA</a>";
  $QualityOptimization =  "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/TVARIT.Aluminum.Coils.-.Prescriptive.Quality.pdf\">Aluminum Coil – Prescriptive Quality</a>";

  if ($page == "Molding Process" || $page=='Aluminum Die Casting – Prescriptive Quality') {
    $downloadLinks = $MoldingProcess;

    $downloadLinksOther = "
    $PredictiveMaintenance<br>
    $ProductionPlanning<br>
    $QualityOptimization";

  }else if ($page == "Predictive Maintenance" || $page=='Drive Motors – Predictive Maintenance') {
    $downloadLinks = $PredictiveMaintenance;

    $downloadLinksOther = "
    $MoldingProcess<br>
    $ProductionPlanning<br>
    $QualityOptimization";
  }else if ($page == "Production Planning" ) {
    $downloadLinks = $ProductionPlanning;

    $downloadLinksOther = "
    $MoldingProcess<br>
    $PredictiveMaintenance<br>
    $QualityOptimization";
  }else if ($page == "Quality Optimization" || $page=='Aluminum Coil – Prescriptive Quality') {
    $downloadLinks = $QualityOptimization;

    $downloadLinksOther = "
    $MoldingProcess<br>
    $PredictiveMaintenance<br>
    $ProductionPlanning";
  }

  $message = "

<div style=\"padding:30px; background:#f6f7f8;\">
  <div style=\"width:600px; margin:auto;\">
    <div><img style=\"width:100%; height:auto\"  src='https://beta.tvarit.com/img/use-cases-banner.jpg'/></div>
    <div style=\"background:#fff; padding:30px; margin-top:20px; font-family:Montserrat,Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;font-size:12px;color:#414141;line-height:24px;text-align:left\">
      <div style=\"font-size:15px; line-height:30px;\">Dear <b>$name</b>,</div>
      <div style=\"margin:20px 0px 0px 0px;\">
        Thank you for showing interest in our solutions. Please find the $downloadLinks use-case here.<br>
        You can also refer to our other use-cases as below:-<br>
        $downloadLinksOther

        <br>If you would like to have any further information on this, please email us on <a href='#'>info@tvarit.com</a>.  Our team will be contacting you shortly.
        <br><br>
        <strong>Best Regards,</strong><br> Tvarit Team
      </div>
    </div>
    <div style=\"text-align:center\">
      <div style=\"margin:10px 0px 0px 0px; padding:12px 0px 0px 0px; border-top:2px #333 solid; font-family:Montserrat,Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;font-size:12px;color:#414141;line-height:24px;text-align:center;\">
        Mail: <a style=\"color:#00c0e7\" href=\"info@tvarit.com\">info@tvarit.com</a><br>
        Web: <a style=\"color:#00c0e7\" href='https://www.tvarit.com'>www.tvarit.com</a><br>
        Follow us on: <a style=\"color:#00c0e7\" href='https://www.linkedin.com/company/13015039'><img style=\"width:24px; height:24px;\" src='https://beta.tvarit.com/img/in-icon.png'/></a> &nbsp; <a style=\"color:#00c0e7\" href='https://www.facebook.com/tvaritAI/'><img style=\"width:24px; height:24px;\" src='https://beta.tvarit.com/img/fb-icon.png'/></a> &nbsp; <a style=\"color:#00c0e7\" href='https://twitter.com/TvaritAI'><img style=\"width:24px; height:24px;\" src='https://beta.tvarit.com/img/twitter-icon.png'/></a> &nbsp; <a style=\"color:#00c0e7\" href='https://www.youtube.com/channel/UCJfogjg3LqSmXMpy6dIOsEw'><img style=\"width:24px; height:24px;\" src='https://beta.tvarit.com/img/youtube-icon.png'/></a>
        <br>EU H2020 winner of the best Industrial AI solution among 490 AI companies in Europe.
      </div>


      <div style=\"margin:10px 0px 30px 0px; padding:0px 0px 12px 0px; border-bottom:2px #333 solid;\"><img src='https://beta.tvarit.com/img/new-sig.png'/></div>
      <div style=\"font-family:Arial,Helvetica Neue,Helvetica,sans-serif;font-size:11px;color:#979797;line-height:18px;text-align:left\">
        <p style=\"padding:0;margin:0;text-align:center\"><span><span style=\"color:#222222\">Tvarit GmbH</span></span><span><br>
        </span><span>Geschäftsführer: Suhas Patel & Rahul Prajapat&nbsp;</span><span><br>
        </span><span>Hanauer Landstraße 521,</span><span><br>
        </span><span>60386 Frankfurt am Main&nbsp;</span></p>
        <p style=\"padding:0;margin:0;text-align:center\"><span>Germany</span><span><br>
        </span><span>Registergericht: Frankfurt am Main | Handelsregisternummer:&nbsp;HR B 114845</span></p>
        <p style=\"padding:0;margin:0;text-align:center\">&nbsp;</p>
        <p style=\"padding:0;margin:0;text-align:center\"><span><span style=\"color:#222222\">IMPRESSUM</span></span></p>
        <p style=\"padding:0;margin:0\"><span>Die in dieser Email und deren Anlagen enthaltenen Informationen sind vertraulich und nur für den vorgesehenen Empfänger bestimmt. Jegliche unautorisierte Verbreitung, Verwendung oder das Kopieren dieser Nachricht und deren Anlagen sind nicht gestattet. Sollten Sie nicht der richtige Adressat sein oder diese E-Mail irrtümlich erhalten haben, informieren Sie bitte sofort den Absender und entfernen Sie diese Email umgehend aus Ihrem System. Tvarit GmbH übernimmt keine Haftung für die fehlerfreie und vollständige Übertragung dieser Nachricht.</span></p>
        <p style=\"padding:0;margin:0;text-align:center\"><span><span style=\"color:#222222\">DISCLAIMER</span></span></p>
        <p style=\"padding:0;margin:0\"><span>The information contained in this e-mail and any attachments are confidential, may be subject to legal privilege, and is intended solely for the use of the addressee. Any unauthorized dissemination or copying of this e-mail or its attachments, and any use or disclosure of any information contained in them, is strictly prohibited and may be illegal. If you have received this e-mail in error, please notify us immediately. The e-mail transmission and any attachments must be deleted from your system. Tvarit GmbH does not bear any responsibility for the accuracy or completeness of its transmission.</span></p>
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

  $subject = "Your Tvarit Use-Case Request";
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
