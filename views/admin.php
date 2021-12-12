<?php  
session_start();
if(isset($_POST['logout']) || $_SESSION['level_id'] != 1) {
    session_unset(); 
    session_destroy(); 
    header('Location: login');  
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
}
else{
    $_SESSION['LAST_ACTIVITY'] = time();
}
if(!(isset($_SESSION['id']) and isset($_SESSION['email']))) {
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
            <header class="bg-indigo-200">
            <?php include dirname(__FILE__).'/nav_header.php'; ?>
        </header>   
    <div class="container">
        <div class="w-10/12 mx-auto my-2">
            <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0">
              <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="https://picsum.photos/200" alt="" width="384" height="512" type="img">
              <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                  <p class="text-lg font-medium">
                    “Tailwind CSS is the only framework that I've seen scale
                    on large teams. It’s easy to customize, adapts to any design,
                    and the build size is tiny.”
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-sky-500">
                    Sarah Dayan
                </div>
                <div class="text-gray-700">
                    Staff Engineer, Algolia
                </div>
            </figcaption>
            <div>
                <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600">Approve</button>
                <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600">Disapprove</button>
            </div>
        </div>
    </figure>
</div>
</div>   
</body>
</html>
