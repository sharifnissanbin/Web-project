<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/update_doctor.css">
    <title>Update Doctor</title>
</head>
<?php
include '../model/connection.php';
$id = $_REQUEST['id'];
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $phone = $_REQUEST['phone'];
    $department = $_REQUEST['department'];
    $specialization = $_REQUEST['specialization'];
    $experience_year = $_REQUEST['experience_year'];
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $result = $mydb->updateDoctor($conobj,"doctor",$id,$name,$email,$password,$phone,$department,$specialization,$experience_year);
    if($result){
        echo "successfully updated";
        header('location: ../view/admin_dashboard.php');
    }
    else{
        echo "failed to update";
    }
}

?>

<body>
    <?php
     $mydb = new model();
     $conobj= $mydb->OpenConn();
    $id = $_REQUEST['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM doctor WHERE id = $id"))
     ?>

    <div>
        <form method="POST" action="">
            <p>Name</p>
            <input type="text" name="name" id="name1" value="<?php echo $rows['name']  ?>" required>
            <br>
            
            <p>Email</p>
            <input type="email" name="email" id="email1" value="<?php echo $rows['email']  ?>">
            <br>
           
            <p>Password</p>
            <input type="password" name="password" id="password1" value="<?php echo $rows['password']  ?>"> <br>
          

            <p>Phone Number</p>
            <input type="text" name="phone" id="phone1" value="<?php echo $rows['phone']  ?>">
            <br>
            <p>Department</p>
            <input type="text" name="department" id="department" value="<?php echo $rows['department']  ?>">
            <br>
            <p>Specialization</p>
            <input type="text" name="specialization" id="specialization" value="<?php echo $rows['specialization']  ?>">
            <br>
            <p>Year Of Experience</p>
            <input type="text" name="experience_year" id="experience_year" value="<?php echo $rows['experience_year']  ?>">
            <br>
           
           
            <div class="center">
                <input type="submit" class="common_btn" value="Update" name="submit">
            </div>
        </form>

        <div class="center">
            <a class="common_btn" href="../view/admin_dashboard.php">Back Home</a>
        </div>

    </div>

   
</body>
    

</html>
