<?php 
include "../Controller/payment_process.php";


?>
<!DOCTYPE html>

<html>

<head>
    
    <title> Payment Form </title>
    <link rel="stylesheet" href="../Styles/book.css">
    <script src="../js/payment.js"></script>
</head>
<h1> Patient Payment Page. </h1>

<body>
    <form action="" method="post" onsubmit="return validateForm(event) ">
        <table>
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Payment Information</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label> User Name : </label><br><br>
                                </td>
                                <td>
                                    <input type="text" name="username" id="username"><br>

                                    

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Email :</label><br>
                                </td>
                                <td>
                                    <input type="text" name="email" id="email"><br>

                                    
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label>Select Operator :<br><br>
                                </td>
                                <td>
                                    <select name="op" id="op"></label>
                                        <option value="">Select</option>
                                        <option value="Grameenphone">Grameenphone</option>
                                        <option value="Banglalink">Banglalink</option>
                                        <option value="Airtel">Airtel</option>
                                        <option value="Robi">Robi</option>
                                        <option value="Teletalk">Teletalk</option>
                                    </select>
                                    
                                    <br><br>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Phone Number :</label><br>
                                </td>
                                <td>
                                    <input type="number" name="phone" id="phone"><br>

                                    
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Recipent Phone Number :</label><br>
                                </td>
                                <td>
                                    <input type="number" name="rphone" id="rphone"><br>

                                    
                                </td>
                            </tr>



                            

                            <tr>
                                <td>
                                    <label>Payment Method :<br><br>
                                </td>
                                <td>
                                    <select name="pm" id="pm"></label>
                                        <option value="">Select</option>
                                        <option value="bkash">bkash</option>
                                        <option value="nogod">Nogod</option>
                                        <option value="rocket">Rocket</option>
                                        <option value="taptap">Taptap</option>
                                        <option value="upay">Upay</option>
                                    </select>
                                    
                                    <br><br>
                                </td>
                            </tr>

          

                            <tr>
                                <td>
                                    <label>Pin Number: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="password" name="pin" id="pin"><br><br>
                                    
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Reference: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="refer" id="refer"><br><br>
                                    
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