<?php

include('../model/database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
 $query= "SELECT * FROM appointment WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}


function update_data($connection, $id){

    $p_name= legal_input($_POST['p_name']);
      $email= legal_input($_POST['email']);
      $phone = legal_input($_POST['phone']);
      $d_name = legal_input($_POST['d_name']);

      $query="UPDATE appointment 
            SET p_name='$p_name',
                email='$email',
                phone= '$phone',
                d_name='$d_name' WHERE id=$id";

      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:../view/appoint-table.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>