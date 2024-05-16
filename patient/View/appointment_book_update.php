<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Appointment</title>
    <link rel="stylesheet" href="../Styles/book.css">
    
</head>
<body>
    <form action="../Controller/update_appointment_book.php" method="post">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend><b>Update patient Appointment</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label> Select ID:</label><br>
                                    <input type="text" name="id" placeholder="Enter ID to update"><br><br>
                                    
                                    <label>Doctor Name:</label><br>
                                    <input type="text" name="doctorname" id="doctorname"><br>

                                    <label>Schedule:</label><br>
                                    <input type="text" name="schedule" id="schedule"><br>

                                    <label>Patient Name:</label><br>
                                    <input type="text" name="patientname" id="patientname"><br>

                                    <label>Phone Number:</label><br>
                                    <input type="number" name="phonenumber" id="phonenumber"><br>

                                    <label>Problem Statement:</label><br>
                                    <input type="text" name="problemstatement" id="problemstatement"><br> <br>

                                    <input type="submit" name="Update" value="Update Appointment">
                                    
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
