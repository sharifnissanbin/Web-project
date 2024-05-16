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
    <form action="../Controller/updatePatient.php" method="post">
        <table>
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Information</b></legend><br><br>
                        <table>
                            <tr>

                                  <label> Select ID:</label><br>
                                  <input type="text" name="id" placeholder="Enter ID to update"><br><br>

                                <label> User Name:</label><br>
                                <input type="text" name="uname" id="uname"><br>

                                <label>Email:</label><br>
                                <input type="text" name="email" id="email"><br>

                                <label>Password:</label><br>
                                <input type="password" name="pass" id="pass"><br>

                                <input type="submit" name="Update" value="Update">


                            </tr>

                        </table>

                    </fieldset>
                </td>

            </tr>
        </table>
    </form>
</body>

</html>