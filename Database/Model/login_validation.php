<?php
include dirname(__FILE__) . '/../connection.php';

$email_error       = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Something posted
    if (isset($_POST['login'])) {
        $email             = $_POST['email'];
        $password          = $_POST['password'];
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql_e);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hash_pass = $row["password"];
            if (password_verify($password, $hash_pass)) {
                header('Location: home');
            } else {
                $email_error = "Sorry... email or password is incorrect";
            }
        }
        else {
            $email_error = "Sorry... email or password is incorrect";
        }
    }
}
