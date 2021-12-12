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
    case "/request_evaluation":
        require __DIR__ . '/views/request_evaluation.php';
        break;
    case "/admin":
        require __DIR__ . '/views/admin.php';
        break;
    case "/status_update":
        require __DIR__ . '/Database/Model/status_update.php';
        break; 
    case "/profile":
        require __DIR__ . '/views/profile.php';
        break;        
    default:
        http_response_code(404);
        require __DIR__ . '/views/signup.php';
        break;
}
?>
