<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dashbord_style.css">
    <title>Admin DashBoard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#parent_element").click(function() {
                $("#child_element").slideToggle("slow");
            });
        });
    </script>
</head>
<?php
include '../model/connection.php';
session_start();

$mydb = new model();
$conobj = $mydb->OpenConn();

if ($_SESSION['email']) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conobj, $sql);
    $row = mysqli_fetch_assoc($result);
    echo '<div class="center">';
    echo '<div class="c1">';
    echo  '<img class="img1" src="picture/' . $row['photo'] . '" width="50" height="50" alt="image">';
    echo '<p>' . 'WELCOME ADMIN:-  ' . $row['name'] . '</p>';
    echo '</div>';
    echo '<div>';
    echo "<a class='btn' href='../controller/logout.php'>Logout</a>";
    echo '</div>';
    echo '</div>';
} else {
    header('location: ./admin_login.php');
}
?>

<body>
    <h3 class="text_center" id="parent_element">Doctor Management</h3>
    <table id="child_element">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Specialization</th>
                <th>Year Of Experience</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // include '../model/connection.php';
            $mydb1 = new model();
            $connobj = $mydb1->openConn();
            $result = $mydb1->showDoctor($connobj, "doctor");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $phone = $row['phone'];
                    $department = $row['department'];
                    $specialization = $row['specialization'];
                    $experience_year = $row['experience_year'];
                    echo
                    '<tr>
                    <td>' . $id . '</td>
              <td>' . $name . '</td>
              <td>' . $email . '</td>
              <td>' . $password . '</td>
              <td>' . $phone . '</td>
              <td>' . $department . '</td>
              <td>' . $specialization . '</td>
              <td>' . $experience_year . '</td>
              <td><a class= "edit_btn" href="../controller/edit_doctor_info.php?id=' . $id . '">Edit</a></td>
              <td><a class = "delete_btn" href="../controller/delete_doctor_info.php?id=' . $id . '">Delete</a></td>
            </tr>';
                }
            }

            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h3 class="text_center" id="parent_element1" onclick="loadPatientData()">See Patient Information</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Blood group</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody id="txt1">

        </tbody>
    </table>
    <br><br><br>
    <h3 class="text_center" id="parent_element2" onclick="loadPatientAppointment()">See Patient Appointment</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Doctor to Appoint</th>
                <th>Appointment Date</th>
            </tr>
        </thead>
        <tbody id="txt2">

        </tbody>
    </table>
    <br><br><br>
    <div class="add_section">
        <a class="add1" href="./new_doctor.php">Add Doctor</a>
        <a class="add2" href="./new_stuff.php">Add Stuffs</a>
    </div>
    <br><br><br>
    <div class="s1">
        <div>
            <h2>Search Medical Equipment</h2>
        </div>
        <div>
            <form action="">
                <input type="text" name="input_field" placeholder="Please Enter Id Or Name Of Equipment" id="">
                <input type="submit" class="btn" name="search_btn" value="Search">
            </form>
        </div>
    </div>
    <table class="">
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipment Name</th>
                <th>Equipment Price</th>
                <th>Equipment We Have</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mydb = new model();
            $conobj = $mydb->OpenConn();
            if (isset($_REQUEST['search_btn'])) {
                $search = $_REQUEST['input_field'];
                $sql = "SELECT * FROM medical_equipment WHERE id = '$search' or name = '$search'";
                $result = mysqli_query($conobj, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<tbody>
                    <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['price'] . '</td>
                    <td>' . $row['quantity'] . '</td>
                    </tr>
                    </tbody>
                    ';
                } else {
                    echo '<tr>
                        <td>No Data Found</td>
                        </tr>';
                }
            }
            ?>

        </tbody>


    </table>

    <br><br><br>
    <h3 class="text_center" id="parent_element3" onclick="loadEquipmentt()">See All Medical Equipment</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipment Name</th>
                <th>Equipment Price</th>
                <th>Equipment We Have</th>
            </tr>
        </thead>
        <tbody id="txt3">

        </tbody>
    </table>
    <br><br><br>
    <h3 class="text_center" id="parent_element4" onclick="loadStuff()">See All Medical Stuffs Work Here</h3>
    <table>
        <thead>
            <tr>
                <th>Stuff ID</th>
                <th> Stuff Name</th>
                <th>Stuff email</th>
                <th>Stuff Password</th>
                <th>Stuff Phone</th>
            </tr>
        </thead>
        <tbody id="txt4">

        </tbody>
    </table>

    <script src="../controller/js/load_patient_data.js"></script>
    <script src="../controller/js/load_appointment.js"></script>
    <script src="../controller/js/load_equipment.js"></script>
    <script src="../controller/js/load_stuff.js"></script>
</body>

</html>