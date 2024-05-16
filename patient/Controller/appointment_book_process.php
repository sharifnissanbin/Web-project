<?php 
include '../Model/mydb.php'; 

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $doctorname = $_POST["doctorname"];
    $schedule = $_POST["schedule"];
    $patientname = $_POST["patientname"];
    $phonenumber= $_POST["phonenumber"];
    $problemstatement= $_POST["problemstatement"];

    


$db->insertAppointmentBooking( $doctorname, $schedule, $patientname, $phonenumber, $problemstatement);
}

$db->closeCon();
?>