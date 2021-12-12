<?php
session_start();
include dirname(__FILE__) . '/../connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SESSION['level_id'] == 1) {

    // Something posted
    if (isset($_POST['status_update'])) {

        $status = $_POST['status'];
        $user_id = $_POST['id'];
        $sql_e = "UPDATE products SET status = '$status' WHERE user_id='$user_id'";
        $res_e = mysqli_query($conn, $sql_e);
        echo $res_e;
    }
}
