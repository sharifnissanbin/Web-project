<?php
include '../model/connection.php';
$mydb = new model();
$conobj = $mydb->OpenConn();

$email = $password = $hasErr = $allErr ='';
$emailErr = $passwordErr = '';


if (isset($_REQUEST['submit'])) {

    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_REQUEST["email"])) {
        $hasErr = 1;
        $emailErr = "please enter a valid email address";
    } else {
        $email = $_REQUEST['email'];
    }
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_REQUEST["password"])) {
        $hasErr = 1;
        $passwordErr = "please enter a valid password";
    } else {
        $password = $_REQUEST['password'];
    }

    if ($hasErr === 1) {
       $allErr = "Please Fullfill all Fields";
    } else {

        $result = mysqli_query($conobj, "SELECT * FROM admin WHERE email='$email' AND password='$password'");
        $data_present_row_number = mysqli_num_rows($result);
        if ($data_present_row_number == 1) {
            session_start();
            $_SESSION['email'] = $email;
            header('location: ../view/admin_dashboard.php');
        } else {
            echo "No Data Matching";
        }
    }
}
