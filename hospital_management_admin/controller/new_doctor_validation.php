<?php
include '../model/connection.php';
$name = $email = $password =$phone = $department =$specialization = $experience =$hasErr =  '';
$nameErr = $emailErr = $passwordErr =$phoneErr = $departmentErr =$specializationErr = $experienceErr =  '';
if(isset($_REQUEST['submit'])){
    if(empty($_REQUEST["name"]))
    {
        $hasErr=1;
        $nameErr= "please enter a valid Name";
    
    }
    else{
        $name= $_REQUEST['name'];
    }
    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_REQUEST["email"]))
    {
        $hasErr=1;
        $emailErr= "please enter a valid email address";
    
    }
    else{
        $email= $_REQUEST['email'];
    }
    if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$_REQUEST["password"]))
    {
        $hasErr=1;
        $passwordErr= "please enter a valid password";
    
    }
    else{
        $password= $_REQUEST['password'];
    }
    if(!preg_match("/^\+88/",$_REQUEST["phone"]))
    {
        $hasErr=1;
        $phoneErr= "please enter a valid Phone Number";
    
    }
    else{
        $phone= $_REQUEST['phone'];
    }
    if(empty($_REQUEST["department"]))
    {
        $hasErr=1;
        $departmentErr= "please enter department";
    
    }
    else{
        $department= $_REQUEST['department'];
    }
    if(empty($_REQUEST["specialization"]))
    {
        $hasErr=1;
        $specializationErr= "please enter specialization";
    
    }
    else{
        $specialization= $_REQUEST['specialization'];
    }
    if(empty($_REQUEST["experience"]) && intval($_REQUEST['experience']>0))
    {
        $hasErr=1;
        $experienceErr= "please enter experience";
    
    }
    else{
        $experience= $_REQUEST['experience'];
    }

    if($hasErr === 1)
    {
        echo "please enter all the credentials";
    }
    else{
        $mydb = new model();
        $conobj= $mydb->OpenConn();  //connection string
       $result = $mydb->doctor_add($conobj,"doctor",$name,$email,$password,$phone,$department,$specialization,$experience);
       if($result){
           echo "successfully inserted";
           header('location: ../view/admin_dashboard.php');
       }
       else{
           echo "failed to insert";
       }
    }

}
?>