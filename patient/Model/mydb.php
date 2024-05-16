<?php

class mydb {
    public $conn;

    function openCon() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $dbname = "patient1"; 

        $this->conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
    }

   function insertPatient($uname, $email, $pass, $dob, $gender, $bg, $add) {         //1
    $sql = "INSERT INTO ptable (`username`, `email`, Password, `dob`,`Gender`,`bg`, `add`) 
            VALUES ('$uname', '$email', '$pass', '$dob', '$gender', '$bg', '$add')";

    if ($this->conn->query($sql) === TRUE) {
        echo "Data successfully inserted";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}


function deletePatient($id) {                         
    $sql = "DELETE FROM ptable WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $this->conn->error;
    }
}



function updatePatient($id, $uname, $email, $pass) { 
    $sql = "UPDATE ptable SET
     `username`='$uname',
      `email`='$email', 
      `Password`='$pass'
       WHERE id = '$id'";

    if ($this->conn->query($sql) === TRUE) {
        echo "Data successfully updated";
    } else {
        echo "Error updating record: " . $this->conn->error;
    }
}





function insertAppointmentBooking($doctorname, $schedule, $patientname, $phonenumber, $problemstatement) {         
    $sql = "INSERT INTO appointment_booking (`Doctor Name`, `Schedule`, `Patient Name`, `Phone Number`, `Problem Statement`) 
        VALUES ('$doctorname', '$schedule', '$patientname', '$phonenumber', '$problemstatement')";


    if ($this->conn->query($sql) === TRUE) {
        echo "Appointment booking inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}


function deleteApppointmentBooking($id) {    
    $sql = "DELETE FROM appointment_booking WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $this->conn->error;
    }
}


function UpdateAppointmentBooking( $id,$doctorname, $schedule, $patientname, $phonenumber, $problemstatement) { 
    $sql = "UPDATE appointment_booking SET 

            `Doctor Name`='$doctorname', 
            `Schedule`='$schedule', 
            `Patient Name`='$patientname', 
            `Phone Number`='$phonenumber', 
            `Problem Statement`='$problemstatement' 
            WHERE id='$id'";

    if ($this->conn->query($sql) === TRUE) {
        echo "Appointment details updated successfully";
    } else {
        echo "Error updating appointment details: " . $this->conn->error;
    }
}


function insertPayment($username, $email, $op, $phone, $rphone, $pm, $pin, $refer) {       
    $sql = "INSERT INTO payment (`User Name`, `Email`, `Select Operator`, `Phone Number`, `Recipent Phone Number`, `Payment Method`, `Pin Number`, `Reference`) 
        VALUES ('$username', '$email', '$op', '$phone', '$rphone', '$pm', '$pin', '$refer')";
        

    if ($this->conn->query($sql) === TRUE) {
        echo "Payment information inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}


function deletePayment($id) {     
    $sql = "DELETE FROM payment WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $this->conn->error;
    }
}



function updatePayment($id, $username, $email, $op, $phone, $rphone, $pm, $pin, $refer) { 
    $sql = "UPDATE payment SET 
            `User Name`='$username', 
            `Email`='$email', 
            `Select Operator`='$op', 
            `Phone Number`='$phone', 
            `Recipent Phone Number`='$rphone', 
            `Payment Method`='$pm', 
            `Pin Number`='$pin', 
            `Reference`='$refer' 
            WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Payment information updated successfully";
    } else {
        echo "Error updating payment information: " . $this->conn->error;
    }
}





function insertPatientComplication($pname, $gender, $age, $height, $weight, $bg, $p) {       
    $sql = "INSERT INTO Patient_Complication (`Patient Name`, `Gender`, `Age`, `Height`, `Weight`, `Blood Group`, `Problem`) 
        VALUES ('$pname', '$gender', '$age', '$height', '$weight', '$bg', '$p')";
        

    if ($this->conn->query($sql) === TRUE) {
        echo "Complication information inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}


function deletePatientComplication($id) {    
    $sql = "DELETE FROM Patient_Complication WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $this->conn->error;
    }
}


function updatePatientComplication($id, $pname, $gender, $age, $height, $weight, $bg, $p) { 
    $sql = "UPDATE Patient_Complication SET 
            `Patient Name`='$pname', 
            `Gender`='$gender', 
            `Age`='$age', 
            `Height`='$height', 
            `Weight`='$weight', 
            `Blood Group`='$bg',  
            `Problem`='$p' 
            WHERE id='$id'";
    if ($this->conn->query($sql) === TRUE) {
        echo "Complication information updated successfully";
    } else {
        echo "Error updating Complication information: " . $this->conn->error;
    }
}





    function closeCon() {
        $this->conn->close();
    }
}


?> 