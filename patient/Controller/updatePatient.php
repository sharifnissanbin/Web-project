<?php
include '../Model/mydb.php';

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Update'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
       

        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        $db->updatePatient($id, $uname, $email, $hashedPassword);
    }
}

$db->closeCon();
?>

