<?php 
session_start();
include dirname(__FILE__) . '/../connection.php';
$products = array();
if($_SESSION['level_id'] == 1) {
    $query = "SELECT products.*, users.first_name, users.last_name FROM products inner join users on products.user_id = users.user_id ORDER BY status DESC";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
} else {
  echo "0 results";
}
}




?>
