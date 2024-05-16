<?php 
include '../Model/mydb.php'; 

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST["username"];
    $email = $_POST["email"];
    $op = $_POST["op"];
    $phone = $_POST["phone"];
    $rphone = $_POST["rphone"];
    $pm = $_POST["pm"];
    $pin = $_POST["pin"];
    $refer = $_POST["refer"];



   


$db->insertPayment($username, $email, $op, $phone, $rphone, $pm, $pin, $refer);
}

$db->closeCon();
?>

