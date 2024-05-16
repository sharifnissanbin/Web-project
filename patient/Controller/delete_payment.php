<?php
include '../Model/mydb.php'; 

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['p_id'])) {
    $id = $_POST['p_id'];

    $db->deletePayment($id);
}

$db->closeCon();
?>