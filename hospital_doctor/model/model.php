<?php 

require_once 'db_connect.php';


function showAllUsers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showUsers($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where User_Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}





function showUsersByEmail($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where Email = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
        //echo "success";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function updatePassword($data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Password = ?  where Email = ?";

    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            $data['password'],
            $data['email']
            
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



function addUsers($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO user_info( Name ,Email, Dob, Gender, User_Name, Password)
VALUES (:Name,:Email,:Date_Of_Birth,:Gender,:User_Name, :Password)";
    
    
    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':Name'                =>    $data['Name'],
            ':Email'              =>   $data['Email'],
            ':Date_Of_Birth'     =>     $data['Dob'], 
            ':Gender'           =>     $data['Gender'],     
            ':User_Name'      =>     $data['User Name'],  
            ':Password'     =>     $data['Password']
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




function updateUsers($data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?,  Email = ? where User_Name = ?";

    try{

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            $data['Name1'],
            $data['email1'],
            $data['username']
            
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}







function showAllPatient(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_info` ";
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function showPatientPending(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_info` where Status = 'Pending' ";
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}






function showHistory(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `history_info` ';
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showHistoryAccepted(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `history_info` where Status = 'Accepted'";
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function addAppointment($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO history_info( Name ,Email, Age, Problem, Gender,Appointment_Date,Status)
VALUES (:Name,:Email, :Age, :Problem, :Gender, :Appointment_Date, :Status)";
    echo 'again';
    
    try{
        //echo 'ok';
        

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':Name'                =>    $data['Name'],
            ':Email'              =>   $data['Email'],
            ':Age'     =>     $data['Age'], 
            ':Problem'           =>     $data['Problem'],
            ':Gender'           =>     $data['Gender'],
            ':Appointment_Date'     =>     $data['Appontment_Date'], 
            ':Status'           =>     $data['Status']      

            
        ]);
        //echo $data['Name'];
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




function rejectAppointment($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO history_info( Name ,Email, Age, Problem, Gender,Status)
VALUES (:Name,:Email, :Age, :Problem, :Gender, :Status)";
    echo 'again';
    
    try{
        //echo 'ok';
        

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':Name'                =>    $data['Name'],
            ':Email'              =>   $data['Email'],
            ':Age'     =>     $data['Age'], 
            ':Problem'           =>     $data['Problem'],
            ':Gender'           =>     $data['Gender'],
            ':Status'           =>     $data['Status']      

            
        ]);
        //echo $data['Name'];
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




?>