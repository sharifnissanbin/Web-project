<?php
include '../model/connection.php';
$mydb = new Model();
$conObj = $mydb->OpenConn();
$result = $mydb->showEquipment($conObj,"medical_equipment");

if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){

          echo "<tr><td>".$row["id"]."</td>";
          echo "<td>".$row["name"]."</td>";
          echo "<td>".$row["price"]."</td>";
          echo "<td>".$row["quantity"]."</td></tr>";  
        }
    }
?>