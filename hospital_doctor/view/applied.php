

<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>



<!DOCTYPE html>
<html>



<style>
.error {color: #394393;}


</style>

<?php

    

    if(!empty($_POST["appointmentDate"])){


        $q=$_GET["q"];
        $q1=$_POST["appointmentDate"];


        require_once '../controller/readData.php';
        $rows = fetchAllPatient();

        foreach($rows as $row)  
        {  
           if($_GET['q']==$row["Email"])
           {  

              $name=$row["Name"];
              $email=$row["Email"];
              $gender=$row["Gender"];
              $age=$row["Age"];
              $problem=$row["Problem"];
              $appontmentDate=$q1;

              
              
               
            }
        }



        $data['Name']                     =     $name;
        $data['Email']                    =     $email;
        $data['Gender']                   =     $gender;
        $data['Age']                        =    $age;  
        $data['Problem']                 =     $problem; 
        $data['Appontment_Date']          =     $appontmentDate;  
        $data['Status']                     =     "Accepted"; 


    if (addAppointment($data)) {
          header('location:../view/history.php');
        echo 'Successfully added!!';
    } else {
        echo 'You are not allowed to access this page.';    
    }
}


 ?>

<body>

</body>



  </html>