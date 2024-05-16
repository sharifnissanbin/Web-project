<?php 
include "../Controller/appointment_book_process.php";


?>

<!DOCTYPE html>

<html>

<head>
    <title> Appointment Form </title>
    <link rel="stylesheet" href="../Styles/book.css">
    <script src="../js/book.js"></script>
    
</head>

<h1> Patient Apointment Page. </h1>

<body>
    <form action=" " method="post">
        <table>
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Information</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label> Doctor Name : </label><br><br>
                                </td>
                                <td>
                                    <input type="text" name="doctorname" id="doctorname"><br>

                                    

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Schedule:</label><br>
                                </td>
                                <td>
                                    <input type="text" name="schedule" id="schedule"><br>

                                    
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label> Patient Name : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="patientname" id="patientname"><br>
                                    

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Phone Number: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="number" name="phonenumber" id="phonenumber"><br><br>
                                    

                                </td>
                            </tr>
                            



                            <tr>
                                <td>
                                    <label>Problem Statement:</lebel><br><br>
                                </td>
                                <td>
                                    <textarea name="problemstatement" cols="30" rows="8" id="problemstatement"></textarea><br><br>
                                    

                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit">
                                    <input type="reset" name="Reset" value="Reset">
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

