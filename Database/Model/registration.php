<?php
include dirname(__FILE__).'/../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Something posted
  
    if (isset($_POST['registration'])) {
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($password===$confirm_password){
            $sqlquery = "INSERT INTO users VALUES(null,'$firstname', '$lastname', '$mobile', '$mobile', '$password')";
            if ($conn->query($sqlquery) === TRUE) {
                header('Location: login');
            }                                     
        }
       
    } 
  }




?>