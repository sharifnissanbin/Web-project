  <!--  comments-->

<?php
  session_start();
?>



<!DOCTYPE html>
<html>
<style>
.error {color: #FF0000;}
</style>

<head>
  <title>Registration</title>
</head>
 <?php include('header.php')?>
<?php

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $birthdateErr= $degreeErr = $bloodgroupErr = $newpassErr = $renewpassErr = $usernameErr = "";

    $name = $email = $gender = $birthdate = $degree1 = $degree2 = $degree3 = $degree4= $bloodgroup =$newpass = $renewpass = $username = "";

    $check=0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
      
      //name validation//name validation//name validation
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } 
      else {
        $name = test_input($_POST["name"]);
        //validating alphabet
        if (!preg_match("/^[a-zA-Z][a-zA-Z.\_\-]+ +[a-zA-Z.\-\_]+/",$name)) {
          $nameErr = "Only Can contain a-z, A-Z, period(.) , dash only(-) and at least two words";
        }
        else
          $check++;
          //!preg_match("/^[a-zA-Z-'{2,8} ]*$/",$name  
      }




      //email validation//email validation//email validation
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } 
      else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Must be a valid email_address : anything@example.Com";
        }
        else
          $check++;
      }
      
      //username username   
      if (empty($_POST["username"])) {
        $usernameErr = "username is required";
      } 
      else 
      {
          $username = test_input($_POST["username"]);
          //validating alphabet
          if (!preg_match("/^[0-9a-zA-Z-_]{2,}[^\s.]$/",$username)) {
            $usernameErr = "User Name must contain at least two (2) characters and can contain alpha numeric characters, period, dash or underscore only";
          }
          else
            $check++;
      }



      //password validation//password validation//password validation

      if(empty($_POST["newpass"])){
        $newpassErr=" must need to fill password";
      }else
        $newpass=test_input($_POST["newpass"]);


      if(empty($_POST["renewpass"])){
        $renewpassErr=" must need to fill confirm password";
      }else
        $renewpass=test_input($_POST["renewpass"]);
      

      if (!preg_match("/^[0-9a-zA-Z@%#$]{8,}$/",$newpass)) {
            $newpassErr = "UPassword must not be less than eight (8) characters contain at least one of the special characters (@, #, $, %)";

      }else if($_POST["newpass"]==$_POST["renewpass"]){
          $check++; 
      }
      else
        $renewpassErr="didn't macth the password ";





      //gender validation//gender validation//gender validation

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } 
      else {
        $gender = test_input($_POST["gender"]);
        $check++;
      }
      

      //date validation 
      if(empty($_POST["birthdate"])){
        $birthdateErr = " select up year, month, date ";
      }
      else{
        $birthdate = test_input($_POST["birthdate"]);
        $check++;
      }
      

      //form changing 
      if ($check == 6) {
          $_SESSION['name']=$_REQUEST['name'];
          $_SESSION['email']=$_REQUEST['email'];
          $_SESSION['username']=$_REQUEST['username'];
          $_SESSION['pass']=$_REQUEST['newpass'];
          $_SESSION['dob']=$_REQUEST['birthdate'];
          $_SESSION['gender']=$_REQUEST['gender'];
          header('location:../controller/registrationDone.php');
      }
  }
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<body>

<fieldset><p>
<center>
  <h1 align = "center" style="color: #5D006F;" >Registration</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <span class="error">(*) must need to fill </span><br>
  <b> NAME:
		<input type="text" name="name" id="name" onkeyup="nameVal()"><br><br>
    <span class="error" id="nameErr">* <?php echo $nameErr;?></span>
    <br><br>

  <b> EMAIL :
		<input type="text" name="email" id="email" onkeyup="emailVal()"><br><br>
    <span class="error" id="emailErr">* <?php echo $emailErr;?></span>
  <br><br>


 
    <b>  User Name: 
    <input type="text" name="username" id="userName" onkeyup="userVal()"><br><br>
    <span class="error" id="usernameErr">* <?php echo $usernameErr;?></span><br>
  <br>


  
    <b>Password :
      <input type="twxt" name="newpass" id="password" onkeyup="passVal()"><br><br>
    <span class="error" id="passwordErr">* <?php echo $newpassErr;?></span><br><br>
  <br><br>


   <b>Confirm Password :
    <input type="text" name="renewpass" id="rePassword" onkeyup="rePassVal()"><br><br>
    <span class="error" id="rePasswordErr">* <?php echo $renewpassErr;?></span>
  <br><br>


  

  <b> DATE OF BIRTH:<br>
  	<input type="date" min="1953-01-01" max="1998-12-31" id="birthdate" name="birthdate"><br>
    <span class="error">* <?php echo $birthdateErr;?></span><br><br>
  


  GENDER :
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other<br>
    <span class="error">* <?php echo $genderErr;?></span><br><br>
    <input type="submit" value="Registration">&nbsp;&nbsp;
  <br><br>


</center>  
</p><br><br><br><br><br>

</fieldset>
  


</form>



</body>



<script type="text/javascript" src="../javascript/registration.js"></script>






<?php include('footer.php')?>
</html>