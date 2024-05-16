<?php
include '../model/connection.php';
$mydb = new Model();
$conObj = $mydb->OpenConn();
$result = $mydb->showPatient($conObj,"patient");

if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){

          echo "<tr><td>".$row["id"]."</td>";
          echo "<td>".$row["name"]."</td>";
          echo "<td>".$row["email"]."</td>";
          echo "<td>".$row["password"]."</td>";
          echo "<td>".$row["phone"]."</td>";
          echo "<td>".$row["blood_group"]."</td>";
          echo "<td>".$row["gender"]."</td></tr>";  
        }
    }
?>