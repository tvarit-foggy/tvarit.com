<?php  
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "tvarit_com", "7kXEMLVdBD2r6TJuUAR7D8vS", "tvarit_com");
 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $designation = $_POST['designation'];
        $country = $_POST['country'];
        $emailUpdate = $_POST['emailUpdate'];
    // Attempt insert query execution
    $sql = "INSERT INTO tbl_whitepaper_subscribers (firstname, lastname, email, designation, company, country, is_email_updates) VALUES
     ('$fname', '$lname', '$email', '$company', '$designation', '$country', '$emailUpdate')";
   
   if(mysqli_query($link, $sql)){
        echo mysqli_query($link, $sql);
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);

 
 
   
?>