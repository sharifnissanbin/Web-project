<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_login.css">
    <title>Admin Login</title>
</head>
<?php
include '../controller/admin_login_logic.php';
?>
<body>
    <div class="container">
        <div class="middle_container">
            <div class="left">
                <form action="" method="POST">
                  <h2>Admin Login</h2>
                  <?php
                   echo '<p class="err">'.$allErr.'</p>';
                  ?>
                  <p>Enter Your Admin Email</p>
                  <input type="email" name="email" id="email">
                  <?php
                   echo '<p class="err">'.$emailErr.'</p>';
                  ?>
                  <br><br>
                  <p>Enter Admin Password</p>
                  <input type="password" name="password" id="password">
                  <?php
                   echo '<p class="err">'.$passwordErr.'</p>';
                  ?>
                  <br> <br>
                  <input type="submit" name="submit" value="Login">
                </form>
                <a href="./admin_registration.php">Register Admin</a>
                    
            </div>
            <div class="right">
                   <img src="./picture/admin.gif" class="img" alt="">
            </div>
        </div>
    </div>
</body>

</html>