<?php include "../Controller/login_process.php"; ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../Styles/login.css">
    <title>Login</title>
</head>

<body>
    <h1 class="h1">Hospital Management System</h1>
    <fieldset class="login">
        <legend> Login</legend>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($loginError)) {
        echo "<p>$loginError</p>";
    }
    ?>

    </fieldset>
    
    
</body>

</html>