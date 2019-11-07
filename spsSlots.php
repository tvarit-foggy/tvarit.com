<?php
if(isset($_POST['date'])){
   if($link = mysqli_connect("localhost", "tvarit_com", "7kXEMLVdBD2r6TJuUAR7D8vS", "tvarit_com")) {
       $date = $_POST['date'];
       $sql = "SELECT `time_slot`, COUNT(*) as count FROM `tbl_sps_2019` WHERE `appointment_date` = '$date' GROUP BY `time_slot`";
       if($res = mysqli_query($link, $sql)) {
        // $value = mysqli_fetch_array($res);
        while($row = mysqli_fetch_array($res)){
            $timeSlot = $row['time_slot'];
            $count = $row['count'];
            $return_arr[] = array("time_slot" => $timeSlot, "count" => $count,);
        }
        echo json_encode($return_arr);
       }

   } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
?>