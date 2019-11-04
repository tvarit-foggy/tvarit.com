<?php  
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['company'])){
    $link = mysqli_connect("localhost", "tvarit_com", "7kXEMLVdBD2r6TJuUAR7D8vS", "tvarit_com");
 
        $company = $_POST['company'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $jobrole = $_POST['jobrole'];
        $industry = $_POST['industry'];
        $address = $_POST['address'];
    // Attempt insert query execution
    $sql = "INSERT INTO tbl_sps_2019 (user_name, email_id, company_name, address, country, city, job_role, industry) VALUES
     ('$name', '$email', '$company', '$phone_no', '$address', '$country', '$city', '$jobrole', '$industry')";
    $voucher = "SELECT * FROM `tbl_sps_vouchers` WHERE `is_used` = 0 LIMIT 1";
    if ($res = mysqli_query($link, $voucher)) {
        if(mysqli_num_rows($res) > 0) {
        $register_voucher = "UPDATE `tbl_sps_vouchers` SET is_used=1,user_email='$email' WHERE voucher_id_pk = '$res[voucher_id_pk]'";
    }
    }
    
   if(mysqli_query($link, $register_voucher)){
            $msg = $_POST["msg"];
            $to = "$email";
            $message = "
            Dear $name,
                    From 26 -28 November 2019 SPS, the leading exhibition on smart and digital
            automation, will take place in Nuremberg, Germany.
            We, Tvarit Gmbh, are delighted to invite you to visit our booth 150M in hall 6.
            Create your personal admission ticket to the exhibition with the following link:
            '$res[url]'
            If you have any question regarding the registration, please contact the Mesago Messe
            Frankfurt team on +49711 or at tickets@mesago.com

            We look forward to your visit!
            
            Kind Regards,
            Tvarit Team

            Tvarit GmbH
            Gundelandstrasse 5
            60435 Frankfurt am Main
            ";

            $headers  = "From: info@tvarit.com\r\n" .
            "X-Mailer: php\r\n";
            $headers .= "Bcc: info@tvarit.com\r\n";

             mail($to,$subject,$message,$headers);
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
}
  
?>