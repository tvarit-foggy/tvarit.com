<?php  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $phone = $_POST["phone"];
  $page = trim($_GET["page"]);
  $to = "$email";
  $downloadLinks = "";

  $MoldingProcess = "
  Molding Process:
  https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Molding+Process.pdf";
  $PredictiveMaintenance = "
  Predictive Maintenance:
  https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Predictive+Maintenance.pdf";
  $ProductionPlanning = "
  Production Planning:
  https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Production+Planning.pdf";
  $QualityOptimization = "
  Quality Optimization:
  https://s3.eu-central-1.amazonaws.com/docs.tvarit.com/Use-Cases/Use-Cases+English/Quality+Optimization.pdf";

  if ($page == "Molding Process") {
    $downloadLinks = "
    $MoldingProcess Use-Case:

    Other Use-Cases:
    $PredictiveMaintenance
    $ProductionPlanning
    $QualityOptimization";

  }else if ($page == "Predictive Maintenance") {
    $downloadLinks = "
    $PredictiveMaintenance Use-Case:

    Other Use-Cases:
    $MoldingProcess
    $ProductionPlanning
    $QualityOptimization";  
  }else if ($page == "Production Planning") {
    $downloadLinks = "
    $ProductionPlanning Use-Case:

    Other Use-Cases:
    $MoldingProcess
    $PredictiveMaintenance
    $QualityOptimization";
  }else if ($page == "Quality Optimization") {
    $downloadLinks = "
    $QualityOptimization Use-Case:

    Other Use-Cases:
    $MoldingProcess
    $PredictiveMaintenance
    $ProductionPlanning";
  } 

  $message = "
  Dear $name,
  Thank you for your interest in our solutions.
  Please find the requested use-case attached.
  
  $downloadLinks

  Please feel free to contact me in case of any questions.
  Best regards,

  Tobias Gundermann
  Customer Success Manager, Tvarit GmbH
  Phone: +49 171 2251178
  Mail: tobias.gundermann@tvarit.com
  Web: www.tvarit.com
   
 
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
  $subject = "Tvarit Use case request";
  $headers  = "From: info@tvarit.com\r\n" .
  "X-Mailer: php\r\n";
  $headers .= "Bcc: info@tvarit.com\r\n";
  $toTvarit = "info@tvarit.com";

  mail($to,$subject,$message,$headers);
  mail($toTvarit,$subject,$messageTvarit,$headers);
   
?>  