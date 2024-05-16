

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

    



        $q=$_GET["q"];
        $q1=$_POST["appointmentDate"];


        require_once '../controller/readData.php';
        $rows = fetchAllPatient();

        foreach($rows as $row)  
        {  
           if($_GET['q']==$row["id"])
           {  

              $name=$row["Name"];
              $email=$row["Email"];
              $gender=$row["Gender"];
              $age=$row["Age"];
              $problem=$row["Problem"];


              
              
               
            }
        }



        $data['Name']                     =     $name;
        $data['Email']                    =     $email;
        $data['Gender']                   =     $gender;
        $data['Age']                        =    $age;  
        $data['Problem']                 =     $problem; 

        $data['Status']                     =     "Rejected"; 


    if (rejectAppointment($data)) {
          header('location:../view/history.php');
        echo 'Successfully added!!';
    } else {
        echo 'You are not allowed to access this page.';    
    }

  

 ?>






<?php


    $con = mysqli_connect('localhost','root','','hospital');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    $sql="UPDATE history_info SET Status ='Rejected' WHERE id = $q";
    echo '<h1>'.$q.'</h1>';
    $result = mysqli_query($con,$sql);

    
    if($result){
        echo '<h1>Updated</h1>';
    }
    
    
    

    mysqli_close($con);

  ?>

<body>

</body>



  </html>