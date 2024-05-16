<?php

class model
{


    function openConn()
    {
        $conn = new mysqli("localhost", "root", "", "hospital_management");
        return $conn;
    }

    function admin_register($conn, $table, $name, $email, $password, $phone, $date_of_birth, $gender, $address, $photo)
    {
        $sql = "INSERT INTO $table (name,email,password,phone,date_of_birth,gender,address,photo) VALUES ('$name','$email','$password','$phone','$date_of_birth','$gender','$address','$photo')";
        $result = $conn->query($sql);
        return $result;
    }
    function doctor_add($conn, $table, $name, $email, $password, $phone,$department,$specialization,$experience)
    {
        $sql = "INSERT INTO $table (name,email,password,phone,department,specialization,experience_year) VALUES ('$name','$email','$password','$phone','$department','$specialization','$experience')";
        $result = $conn->query($sql);
        return $result;
    }
    function medical_stuff_add($conn, $table, $name, $email, $password, $phone)
    {
        $sql = "INSERT INTO $table (name,email,password,phone) VALUES ('$name','$email','$password','$phone')";
        $result = $conn->query($sql);
        return $result;
    }
    function showDoctor($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function showPatient($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function showAllAppointment($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function showEquipment($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function showStuff($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }

    function updateDoctor($conn, $table, $id, $name, $email, $password, $phone, $department, $specialization, $experience_year)
    {
        $updateSql = "UPDATE $table SET name='$name',email='$email',password='$password',phone='$phone',department = '$department',specialization = '$specialization',experience_year = '$experience_year' WHERE id=$id";
        $result = $conn->query($updateSql);
        return $result;
    }
    function deleteDoctor($conn, $table, $id)
    {
        $deleteSql = "DELETE FROM $table WHERE id=$id";
        $result = $conn->query($deleteSql);
        return $result;
    }
}
