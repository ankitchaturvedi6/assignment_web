<?php  
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
}
else{
    $_SESSION['LAST_ACTIVITY'] = time();
}
if(!(isset($_SESSION['id']) and isset($_SESSION['email']))){
    header('Location: login');
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container grid grid-cols-3 gap-2 mx-auto">
        <div class="w-32 h-32 rounded">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
            alt="image" class="w-24 h-24">
        </div>
        <div class="w-32 h-32 rounded">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
            alt="image" class="w-24 h-24">
        </div>
        <div class="w-32 h-32 rounded">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
            alt="image" class="w-24 h-24">
        </div>
        <div class="w-32 h-32 rounded">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
            alt="image" class="w-24 h-24">
        </div>
        <div class="w-32 h-32 rounded">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
            alt="image" class="w-24 h-24">
        </div>
        <div class="w-32 h-32 rounded">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
            alt="image" class="w-24 h-24">
        </div>
    </div>   
</body>
</html>l
