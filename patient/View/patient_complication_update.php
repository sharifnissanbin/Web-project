<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update patient Complication</title>
</head>
<body>
    <form action="../Controller/update_patient_complication.php" method="post">
        <table align="center">
            <tr>
                <td>
                    <fieldset>
                        <legend><b>Update Complication</b></legend><br><br>
                        <table>
                            <tr>
                                <td>

                                    <label for="id"> Select ID:</label><br>
                                    <input type="text" name="id" placeholder="Enter ID to update"><br><br>
                            
                                    <label for="pname">Patient Name:</label><br>
                                    <input type="text" name="pname" id="pname"><br>

                                    <label>Gender :</lebel><br> 
                                    <input type="radio" name="gender" id="male" value="Male"> Male
                                    <input type="radio" name="gender" id="female" value="Female"> Female
                                    <input type="radio" name="gender" id="others" value="Others"> Others<br> 


                                    <label for="age">Age:</label><br>
                                    <input type="number" name="age" id="age"><br>

                                    <label for="height">Height(feet):</label><br>
                                    <input type="number" name="height" id="height"><br>

                                    <label for="weight">Weight(kg):</label><br>
                                    <input type="number" name="weight" id="weight"><br>

                                    
                            
                                    <label for="bg">Blood Group :<br>
                                
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
                                    <span id="error-bg" class="error-message"></span><br><br>
                             

                                    <label>Brief description about the problem :</lebel><br>
                               
                                    <textarea name="p" cols="30" rows="8" id="p"></textarea><br>
                                    <span id="error-p" class="error-message"></span><br>

                                    <input type="submit" name="update" value="Update Complication">
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
