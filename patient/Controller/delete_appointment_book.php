<?php
include '../Model/mydb.php'; 

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ab_id'])) {
    $id = $_POST['ab_id'];

    $db->deleteApppointmentBooking($id);
}

$db->closeCon();
?>