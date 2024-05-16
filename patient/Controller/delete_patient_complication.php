<?php
include '../Model/mydb.php'; 

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['c_id'])) {
    $id = $_POST['c_id'];

    $db->deletePatientComplication($id);
}

$db->closeCon();
?>