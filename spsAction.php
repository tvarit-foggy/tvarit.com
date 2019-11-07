<?php  
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['company'])){
   if($link = mysqli_connect("localhost", "tvarit_com", "7kXEMLVdBD2r6TJuUAR7D8vS", "tvarit_com")) {
        $company = $_POST['company'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $jobrole = $_POST['jobrole'];
        $industry = $_POST['industry'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $slot = $_POST['slot'];
    // Attempt insert query execution
    $is_email = "SELECT * FROM `tbl_sps_2019` WHERE `email_id` = '$email'";
    $iemail = mysqli_query($link, $is_email);
    $rowCount = mysqli_num_rows($iemail);
    if($rowCount > 1) {
        echo json_encode($rowCount);
        mysqli_close($link);
        die;
    }
     
    $sql = "INSERT INTO `tbl_sps_2019` (user_name, email_id, company_name, phone_no, address, country, city, job_role, industry, appointment_date, time_slot) VALUES
     ('$name', '$email', '$company', '$phone', '$address', '$country', '$city', '$jobrole', '$industry', '$date', $slot)";
     if(mysqli_query($link, $sql)) {
    $voucher = "SELECT * FROM `tbl_sps_vouchers` WHERE `is_used` = 0 LIMIT 1";
        if($res = mysqli_query($link, $voucher)){
        $value = mysqli_fetch_object($res);
        $register_voucher = "UPDATE `tbl_sps_vouchers` SET `is_used` = 1, `user_email` = '$email' WHERE `voucher_id_pk` = '$value->voucher_id_pk'";
    }
    if(mysqli_query($link, $register_voucher)){
        $subject = "Invitation from Tvarit GmbH for SPS 2019";
        $to = "$email";
        $message = "
        <html>
        <head>
        <title><img src='https://tvarit.com/img/logo.png'></title>
        </head>
        <body>
        <img src='https://tvarit.com/img/logo.png' style='width: 150px;margin-left: 5%;margin-bottom: 1%;margin-top: 1%;'>
        <div style=' margin-left:5%; margin-right:5%; width:90%; font-size:15px; padding:20px; border:2px solid #ed1b4a; font-weight: 600;'>
        Dear <b>$name</b>, <br>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From 26 -28 November 2019 SPS, the leading exhibition on smart and digital
        automation, will take place in Nuremberg, Germany.<br>
        We, Tvarit Gmbh, are delighted to invite you to visit our Stand 150M in hall 6.<br>
        Please use the following link to create your personalized Exhibition admission ticket.:</p>
        <div style='text-align:center'>
         <button style='width:130px; height:50px; background-color: #ed1b4a; border-radius:10px;font-size: 14px;'>
         <a style='color:#fff;' href='$value->url' target='_blank' class='btn'>Accept Invitation</a> </button>
         </div>
        <br><br>
        If you have any question regarding the registration, please contact the Mesago Messe
        Frankfurt team on +49 (0) 69 2731 668 70 or at office@tvarit.com
        <br>
        We look forward to your visit!
        <br><br>
        Kind Regards,<br>
        Tvarit Team<br><br>

        Tvarit GmbH<br>
        Gundelandstrasse 5<br>
        60435 Frankfurt am Main<br>
        <p style='font-size: small;font-weight: 500;'>
        <b>IMPRESSUM</b><br>

            Die in dieser Email und deren Anlagen enthaltenen Informationen sind
            vertraulich und nur für den vorgesehenen Empfänger bestimmt. Jegliche
            unauthorisierte Verbreitung, Verwendung oder das Kopieren dieser
            Nachricht und deren Anlagen sind nicht gestattet. Sollten Sie nicht
            der richtige Adressat sein oder diese E-Mail irrtümlich erhalten
            haben, informieren Sie bitte sofort den Absender und entfernen Sie
            diese Email umgehend aus Ihrem System. Tvarit GmbH übernimmt keine
            Haftung für die fehlerfreie und vollständige Übertragung dieser
            Nachricht.
        </p>
        <p style='font-size: small;font-weight: 500;'>
        <b>DISCLAIMER</b><br>

            The information contained in this e-mail and any attachments is
            confidential, may be subject to legal privilege, and is intended
            solely for the use of the addressee. Any unauthorised dissemination or
            copying of this e-mail or its attachments, and any use or disclosure
            of any information contained in them, is strictly prohibited and may
            be illegal. If you have received this e-mail in error, please notify
            us immediately. The e-mail transmission and any attachments, must be
            deleted from your system. Tvarit GmbH does not bear any responsibility
            for the accuracy or completeness of its transmission.
    </p>
        </div>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= "From: info@tvarit.com" . "\r\n";
        $headers .= "Bcc: info@tvarit.com" . "\r\n";

         mail($to,$subject,$message,$headers);
        }
    }

} else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
}
  
?>