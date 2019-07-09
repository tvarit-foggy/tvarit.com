<?php  
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['company_name'])){
    $link = mysqli_connect("localhost", "tvarit_com", "7kXEMLVdBD2r6TJuUAR7D8vS", "tvarit_com");
 
        $company_name = $_POST['company_name'];
        $person_name = $_POST['person_name'];
        $plan = $_POST['plan'];
        $phone_no = $_POST['phone_number'];
        $email_id = $_POST['email'];
        $about_company = $_POST['about_company'];
    // Attempt insert query execution
    $sql = "INSERT INTO tbl_tti_requests (company_name, person_name, plan, phone_no, email_id, about_company) VALUES
     ('$company_name', '$person_name', '$plan', '$phone_no', '$email_id', '$about_company')";
   
   if(mysqli_query($link, $sql)){
        $msg = $_POST["msg"];
            $to = "$email_id";
            $message = "
            Dear $person_name,
                        Thank you very much for contacting us. here is your message. Our team will contact you soon.
            Company Name: $company_name
            Person Name: $person_name
            Plan: $plan
            Phone:   $phone_no
            Email:   $email_id  
            About Company: $about_company 
            
            Kind Regards,
            Tvarit Team

            Tvarit GmbH
            Gundelandstrasse 5
            60435 Frankfurt am Main
            
            This message contains information that may be privileged or confidential and is the property of the Tvarit GmbH. It is intended only for the person to whom it is addressed. If you are not the intended recipient, you are not authorized to read, print, retain copy, disseminate, distribute, or use this message or any part thereof. If you receive this message in error, please notify the sender immediately and delete all copies of this message.
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