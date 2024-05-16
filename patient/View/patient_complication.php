<?php 
include "../Controller/patient_complication_process.php";


?>
<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="style.css">
    <title>Complication Form </title>
    <link rel="stylesheet" href="../Styles/book.css">
</head>
<h1> Patient Complication Page. </h1>

<body>
    <form action="" method="post" onsubmit="return validateForm(event) ">
        <table>
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Complication</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label> Patient Name : </label><br><br>
                                </td>
                                <td>
                                    <input type="text" name="pname" id="pname"><br>

                                    

                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label>Gender :</lebel><br>
                                </td>
                                <td>
                                    <input type="radio" name="gender" id="male" value="Male"> Male
                                    <input type="radio" name="gender" id="female" value="Female"> Female
                                    <input type="radio" name="gender" id="others" value="Others"> Others

                                    
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label> Age : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="number" name="age" id="age"><br>
                                    

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Height(feet) : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="number" name="height" id="height"><br><br>
                                    

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Weight(kg): </lebel><br><br>
                                </td>
                                <td>
                                    <input type="number" name="weight" id="weight"><br><br>
                                    

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label for="bg">Blood Group :<br><br>
                                </td>
                                <td>
                                    <select name="bg" id="bg"></label>
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    
                                    <br><br>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Brief description about the problem :</lebel><br><br>
                                </td>
                                <td>
                                    <textarea name="p" cols="30" rows="8" id="p"></textarea><br><br>
                                    

                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit">
                                    
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