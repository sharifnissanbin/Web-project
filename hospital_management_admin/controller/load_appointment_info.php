<?php
include '../model/connection.php';
$mydb = new Model();
$conObj = $mydb->OpenConn();
$result = $mydb->showAllAppointment($conObj,"appointment");

if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){

          echo "<tr><td>".$row["id"]."</td>";
          echo "<td>".$row["patient_name"]."</td>";
          echo "<td>".$row["doctor"]."</td>";
          echo "<td>".$row["date"]."</td></tr>";  
        }
    }
?>