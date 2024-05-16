<?php 
include '../Model/mydb.php'; 

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    
    $pname = $_POST["pname"];
    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
      }
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $bg = $_POST["bg"];
    $p = $_POST["p"];

   


$db->insertPatientComplication($pname, $gender, $age, $height, $weight, $bg, $p);
}

$db->closeCon();
?>