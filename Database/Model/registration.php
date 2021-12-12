<?php
session_start();
include dirname(__FILE__) . '/../connection.php';
$email_error       = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Something posted
    if (isset($_POST['registration'])) {
        
        $firstname         = $_POST['firstName'];
        $lastname          = $_POST['lastName'];
        $email             = $_POST['email'];
        $mobile            = $_POST['mobile'];
        $password          = $_POST['password'];
        $confirm_password  = $_POST['confirm_password'];
        //check pass is same of not
        if ($password === $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql_e = "SELECT * FROM users WHERE email='$email'";
            $res_e = mysqli_query($conn, $sql_e);
            if (mysqli_num_rows($res_e) > 0) {
                $email_error = "Sorry... email already taken";
            } else {
                $sqlquery = "INSERT INTO users VALUES(null,'$firstname', '$lastname', '$mobile', '$email', '$hashed_password')";
                if ($conn->query($sqlquery) === TRUE) {
                    $sql = "SELECT * from users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['id']    =$row['user_id'];
                    $_SESSION['email'] =$row['email'];
                    $_SESSION['LAST_ACTIVITY'] = time();
                    header('Location: home');
                }
            }
        }
    }
}
