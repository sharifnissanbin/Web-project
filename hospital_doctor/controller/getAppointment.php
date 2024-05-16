

<?php 

    
    require_once '../controller/readData.php';
    $rows = fetchPatientPending();

    $q="";

      echo "<p><br></p><p><br></p><table align='center' border='15px'>
          <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Gender</th>
               <th>Age</th>
               <th>Problem</th> 
               <th>Action</th>
           </tr>";

      foreach($rows  as $row)  
          {  

            $q =$row["id"];
            $z =$row["Email"];
               echo "



               <tr>
                   <td>
                      <h3  align = \"center\">".$row["Name"]."</h3>
                   </td>

                   <td>
                      <h3  align = \"center\">".$row["Email"]."</h3>
                   </td>


                   <td>
                      <h3  align = \"center\">".$row["Gender"]."</h3>
                   </td>

                   <td>
                      <h3  align = \"center\">".$row["Age"]."</h3>
                   </td>

                   <td>
                      <h3  align = \"center\">".$row["Problem"]."</h3>
                   </td>

                   <td>
                        <center>
                          <form method=\"post\"  action=\"applied.php?q=".$row["Email"]."\">
                            <input type=\"date\" min=\"".date('Y-m-d')."\"  id=\"appointmentDate\" name=\"appointmentDate\"><br>
                            <input onclick=\"update(".$q.")\" type=\"submit\" value=\"Apply\">&nbsp;&nbsp;
                            
                          </form>

                          <button onclick=\"reject(".$q.")\">Reject</button>
                        </center>
                   </td>


              </tr>
              
               ";

              
          }

          echo '</table><p><br></p><p><br></p><p><br></p>';

    ?>


