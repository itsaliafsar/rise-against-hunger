<?php

$firstname = $_post['firstname'];
$lastname = $_post['lastname'];
$gender = $_post['gender'];
$email = $_post['email'];
$password = $_post['password'];
$cphonenumber = $_post['phonenumber'];




// database connection

$con = new mysqli('localhost','root','','signuprah')
if($con->connect_error){
    die('connection failed: '.$con->connect_error);
}
else{
    $stmt = $con->prepare("insert into signuprah(firstname, lastname, gender, email, password, phonenumber)
        values(?, ?, ?, ?, ?, ?)");
        
    $stmt ->bind_param("ssssssi", $firstname, $lastname, $gender, $email, $password, $phonenumber);
    $stmt ->execute();
    echo " Sign Up Successfully...";
    $stmt->close();
    $con->close();
}

?>