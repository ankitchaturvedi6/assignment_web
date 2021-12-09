<?php 

// include routes file here
// print_r(getallheaders());

$request = str_replace("assignment_web/","",$_SERVER['REQUEST_URI']);
switch($request) {
    case "/":
        require __DIR__ . '/views/signup.php';
        break;
    case "/login":
        require __DIR__ . '/views/login.php';
        break;
    case "/home":
        require __DIR__ . '/views/home.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
?>