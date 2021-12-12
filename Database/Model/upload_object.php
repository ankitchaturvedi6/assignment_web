<?php
include dirname(__FILE__) . '/../connection.php';
$msg       = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Something posted
    if (isset($_POST['object_upload'])) {
        $contact_method         = $_POST['contact_method'];
        $object_details          = $_POST['object_details'];
        $target_dir = dirname(__FILE__,3) . '/assets/img/';
        $target_file = $target_dir . basename($uniquesavename=time().uniqid(rand()).$_FILES["object_img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        else{
            if (move_uploaded_file($_FILES["object_img"]["tmp_name"], $target_file)) {
                $user_id=$_SESSION['id'];
                $file_name= $uniquesavename;

                $sqlquery = "INSERT INTO products VALUES(null,'$user_id', '$object_details', '$contact_method', '$file_name', 2)";
                if ($conn->query($sqlquery) === TRUE) {
                $msg = "The file ". htmlspecialchars( basename( $_FILES["object_img"]["name"])). " has been uploaded.";
                }else{
                    $msg = $conn->error;
                }
              } else {
                $msg= "Sorry, there was an error uploading your file.";
              }
        }
    }
}
