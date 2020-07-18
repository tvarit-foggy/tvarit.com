<?php  
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "tvarit_com", "180c7b2dd6c96b9fdc725a2949311e02", "tvarit_com");
 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $designation = $_POST['designation'];
        $country = $_POST['country'];
        $emailUpdate = $_POST['emailUpdate'];
    // Attempt insert query execution
    $sql = "INSERT INTO tbl_whitepaper_subscribers (firstname, lastname, email, designation, company, country, is_email_updates) VALUES
     ('$fname', '$lname', '$email', '$company', '$designation', '$country', $emailUpdate)";
   
   if(mysqli_query($link, $sql)){
    $subject = "Tvarit AI Production Optimizer Success Story";
    $to = "$email";
    $message = "
    Hi $fname,  
    Thank you for showing your interest in downloading Tvarit AI success story.

    We will be able to send you the success story in the next 24 hours as we are witnessing very huge demand.
    Thank you for your support and cooperation.

    All the Best,
    Tvarit Team

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
   
?>