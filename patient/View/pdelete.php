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
    <form action="../Controller/deletePatient.php" method="post">
        <table>
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Information</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label for="delete_id">Enter ID to delete: </label>
                                </td>
                                <td>
                                    <input type="text" name="delete_id" id="delete_id">
                                    <input type="submit" value="Delete">
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