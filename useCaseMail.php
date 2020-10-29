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
  Dear <b>$name</b>,<br><br>

  &nbsp;&nbsp;&nbsp; Thank you for your interest in our solutions.<br>
  &nbsp;&nbsp;&nbsp; Please find below link to the requested use-case.<br><br>
  
  $downloadLinks<br><br>

  Please feel free to contact me in case of any questions.<br><br>
  
  Below are our other Use-Cases for your reference:<br>
  $downloadLinksOther<br><br>

  Best regards,<br>
  Tobias Gundermann<br>

  Customer Success Manager,<br>
  Tvarit GmbH<br>
  Phone: +49 171 2251178<br>
  Mail: tobias.gundermann@tvarit.com<br><br>
  
  Web: <a href =\"https://tvarit.com\">www.tvarit.com</a><br><br><br>

  
  EU H2020 winner of the best Industrial AI solution amongst 490 AI companies in Europe.<br>
  Tvarit GmbH<br>
  Geschäftsführer: Suhas Patel <br>
  Hanauer Landstraße 521,<br>
  D-60386 Frankfurt am Main <br>
  Registergericht: Frankfurt am Main | Handelsregisternummer: HR B 114845<br><br>
  
  IMPRESSUM<br>
  Die in dieser Email und deren Anlagen enthaltenen Informationen sind vertraulich und nur für den vorgesehenen Empfänger bestimmt. Jegliche unauthorisierte Verbreitung, Verwendung oder das Kopieren dieser Nachricht und deren Anlagen sind nicht gestattet. Sollten Sie nicht der richtige Adressat sein oder diese E-Mail irrtümlich erhalten haben, informieren Sie bitte sofort den Absender und entfernen Sie diese Email umgehend aus Ihrem System. Tvarit GmbH übernimmt keine Haftung für die fehlerfreie und vollständige Übertragung dieser Nachricht.<br>
  DISCLAIMER<br>
  The information contained in this e-mail and any attachments are confidential, may be subject to legal privilege, and is intended solely for the use of the addressee. Any unauthorized dissemination or copying of this e-mail or its attachments and any use or disclosure of any information contained in them is strictly prohibited and may be illegal. If you have received this e-mail in error, please notify us immediately. The e-mail transmission and any attachments must be deleted from your system. Tvarit GmbH does not bear any responsibility for the accuracy or completeness of its transmission.<br>
";

$messageTvarit = "
Dear $name,<br><br>
&nbsp;&nbsp;&nbsp;Please find the Use case request details,<br><br>
  Name:    $name<br>
  Email:   $email  <br>
  Phone:   $phone<br>
  Company: $company<br>

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
    $mail->AddAddress("info@tvarit.com");
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