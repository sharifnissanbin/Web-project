<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<?php
include '../controller/admin_register_db.php';
?>
<body>
    <div class="form-container">
        <h2>Admin Registration</h2>
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateRegistration()">
            <p>Full Name:</p>
            <input type="text" id="fullname" name="fullname" >
            <p id="err1"></p>
            <br><br>
            
            <p>Email:</p>
            <input type="email" id="email" name="email" required>
            <p id="err2"></p>
            <br><br>
            
            <p>Password:</p>
            <input type="password" id="password" name="password" required>
            <p id="err3"></p>
            <br><br>
               
            <p>Phone Number:</p>
            <input type="text" id="phone" name="phone">
            <p id="err4"></p>
            <br><br>
            
            <p>Date of Birth:</p>
            <input type="date" id="dob" name="dob">
            <p id="err5"></p>
            <br><br>
            
            <p>Gender:</p>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <p id="err6"></p>
            <br><br>
            
            <p>Address:</p>
            <textarea id="address" name="address"></textarea>
            <p id="err7"></p>
            <br><br>
            
            <p>Profile Picture:</p>
            <input type="file" id="profile_pic" name="profile_pic">
            <p id="err8"></p>
            <br><br>
            
            <input type="checkbox" id="terms" name="terms" required>
            <p class="terms">I accept the terms and conditions</p>
            <p id="err9"></p>
            <br><br>
            
            <input type="submit" value="Register" name="submit">
        </form>
        <a href="./admin_login.php">Login</a>
    </div>
    <script src="../controller/js/handle_admin_regis.js"></script>
</body>
</html>
