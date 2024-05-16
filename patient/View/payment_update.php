<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/book.css">
</head>

<body>
    <form action="../Controller/update_payment.php" method="post">
        <table>
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Update Payment Info</b></legend><br><br>
                        <table>
                            <tr>
                            <label> Select ID:</label><br>
                            <input type="text" name="id" placeholder="Enter ID to update"><br><br>

                                <label> User Name:</label><br>
                                <input type="text" name="username" id="username"><br>

                                <label>Email:</label><br>
                                <input type="email" name="email" id="email"><br>


                                    <label>Select Operator :<br>
                                
                                    <select name="op" id="op"></label>
                                        <option value="">Select</option>
                                        <option value="Grameenphone">Grameenphone</option>
                                        <option value="Banglalink">Banglalink</option>
                                        <option value="Airtel">Airtel</option>
                                        <option value="Robi">Robi</option>
                                        <option value="Teletalk">Teletalk</option>
                                    </select>
                                    
                                    <br>
                        

                                    <label>Phone Number :</label><br>       
                                    <input type="number" name="phone" id="phone"><br>
                                    
                        

                            
                                    <label>Recipent Phone Number :</label><br> 
                                    <input type="number" name="rphone" id="rphone"><br>
                                    
                            

                               
                                    <label>Payment Method :<br>
                                    <select name="pm" id="pm"></label>
                                        <option value="">Select</option>
                                        <option value="bkash">bkash</option>
                                        <option value="nogod">Nogod</option>
                                        <option value="rocket">Rocket</option>
                                        <option value="taptap">Taptap</option>
                                        <option value="upay">Upay</option>
                                    </select>
                                   
                        

                                
                                    <label>Pin Number: </lebel><br>
                                    <input type="password" name="pin" id="pin"><br>
                                    



                                    <label>Reference: </lebel><br>
                                    <input type="text" name="refer" id="refer"><br><br>
                                    

                                    <td></td>
                                <td>
                                    <input type="submit" name="update_payment" value="Submit">
                                </td>
                            </tr>


                            </tr>

                        </table>

                    </fieldset>
                </td>

            </tr>
        </table>
    </form>
</body>

</html>


