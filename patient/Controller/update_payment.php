<?php
include '../Model/mydb.php';

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_payment'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $op = $_POST["op"];
        $phone = $_POST["phone"];
        $rphone = $_POST["rphone"];
        $pm = $_POST["pm"];
        $pin = $_POST["pin"];
        $refer = $_POST["refer"];

        // Update payment info by passing ID and other fields
        $db->updatePayment($id, $username, $email, $op, $phone, $rphone, $pm, $pin, $refer);
    }
}

$db->closeCon();
?>
