<?php
include '../model/connection.php';
if (isset($_REQUEST['submit'])) {
    $mydb = new model();
    $conobj = $mydb->OpenConn();
    // Retrieve form data from $_POST array
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $profile_image = $_FILES['profile_pic']['name'];
    $result = $mydb->admin_register($conobj, "admin", $fullname, $email, $password, $phone, $date_of_birth, $gender, $address, $profile_image);
    if ($result) {
        move_uploaded_file($_FILES['profile_pic']['temp_name'], "picture/" . $_FILES['profile_pic']['name']);
        echo "<script>alert('Registration Successfull');</script>";
        header('location: ../view/admin_login.php');
        
    } else {
        echo  "<script>alert('Registration Failed');</script>";
    }
}
