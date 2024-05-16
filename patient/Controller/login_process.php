<?php
session_start();
include '../Model/mydb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     

    $db = new mydb();
    $db->openCon();

    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $sql = "SELECT * FROM ptable WHERE username='$username'";
    $result = $db->conn->query($sql);


    if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row["Password"];

    

    // Verify the entered password with the stored hashed password
    if ($password == $storedPassword) {
        $_SESSION["username"] = $username; // Store username in session
        header("Location: ../View/patient.php");
        exit();
    } else {
        $loginError = "Invalid username or password";
    }
} else {
    $loginError = "Invalid username or password";
}


    $db->closeCon();
}
?>