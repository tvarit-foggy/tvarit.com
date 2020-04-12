<?php  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $phone = $_POST["phone"];
  $page = trim($_GET["page"]);
  $to = "$email";
  $downloadLinks = "";
  $downloadLinksOther = "";

  $MoldingProcess = "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Molding+Process.pdf\">Molding Process</a>";
  $PredictiveMaintenance = "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Predictive+Maintenance.pdf\">Predictive Maintenance</a>";
  $ProductionPlanning =  "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Production+Planning.pdf\">Production Planning</a>";
  $QualityOptimization =  "<a href =\"https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Quality+Optimization.pdf\">Quality Optimization</a>";

  if ($page == "Molding Process") {
    $downloadLinks = $MoldingProcess;

    $downloadLinksOther = "$PredictiveMaintenance
    $ProductionPlanning
    $QualityOptimization";

  }else if ($page == "Predictive Maintenance") {
    $downloadLinks = $PredictiveMaintenance;

    $downloadLinksOther = "
    $MoldingProcess
    $ProductionPlanning
    $QualityOptimization";  
  }else if ($page == "Production Planning") {
    $downloadLinks = $ProductionPlanning;

    $downloadLinksOther = "
    $MoldingProcess
    $PredictiveMaintenance
    $QualityOptimization";
  }else if ($page == "Quality Optimization") {
    $downloadLinks = $QualityOptimization;

    $downloadLinksOther = "
    $MoldingProcess
    $PredictiveMaintenance
    $ProductionPlanning";
  } 

  $message = "
  Dear $name,

  Thank you for your interest in our solutions.
  Please find below link to the requested use-case.
  
  $downloadLinks

  Please feel free to contact me in case of any questions.
  
  Below are our other Use-Cases for your reference:
  $downloadLinksOther

  Best regards,
  Tobias Gundermann

  Customer Success Manager,
  Tvarit GmbH
  Phone: +49 171 2251178
  Mail: tobias.gundermann@tvarit.com
  
  Web: <a href =\"https://tvarit.com\">www.tvarit.com</a>

  
  EU H2020 winner of the best Industrial AI solution amongst 490 AI companies in Europe.
  Tvarit GmbH
  Geschäftsführer: Suhas Patel 
  Hanauer Landstraße 521,
  D-60386 Frankfurt am Main 
  Registergericht: Frankfurt am Main | Handelsregisternummer: HR B 114845
  
  IMPRESSUM
  Die in dieser Email und deren Anlagen enthaltenen Informationen sind vertraulich und nur für den vorgesehenen Empfänger bestimmt. Jegliche unauthorisierte Verbreitung, Verwendung oder das Kopieren dieser Nachricht und deren Anlagen sind nicht gestattet. Sollten Sie nicht der richtige Adressat sein oder diese E-Mail irrtümlich erhalten haben, informieren Sie bitte sofort den Absender und entfernen Sie diese Email umgehend aus Ihrem System. Tvarit GmbH übernimmt keine Haftung für die fehlerfreie und vollständige Übertragung dieser Nachricht.
  DISCLAIMER
  The information contained in this e-mail and any attachments are confidential, may be subject to legal privilege, and is intended solely for the use of the addressee. Any unauthorized dissemination or copying of this e-mail or its attachments and any use or disclosure of any information contained in them is strictly prohibited and may be illegal. If you have received this e-mail in error, please notify us immediately. The e-mail transmission and any attachments must be deleted from your system. Tvarit GmbH does not bear any responsibility for the accuracy or completeness of its transmission.
";

$messageTvarit = "
Dear $name,
Please find the Use case request details,
  Name:    $name
  Email:   $email  
  Phone:   $phone
  Company: $company

";

$mail_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div>
        <p>$message</p>
</div>
</body>
</html>';

  $subject = "Tvarit Use case request";
  $headers  = "From: info@tvarit.com\r\n" .
  "X-Mailer: php\r\n";
  // $headers .= "Bcc: info@tvarit.com\r\n";
  $toTvarit = "info@tvarit.com";

  mail($to,$subject,$mail_content,$headers);
  mail($toTvarit,$subject,$messageTvarit,$headers);
   
?>  