<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Welcome</h1>
            <p class="text-sm">Minimal login page for day to day use</p>
            
            <form class="space-y-5 mt-5">
            <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email" />
            <div class="w-full flex items-center border border-gray-800 rounded px-3">
                <input type="password" class="w-4/5 h-12" placeholder="Password" />
                <span class="text-blue-700 hover:bg-blue-400 rounded-md px-3">Show</span>
            </div>

            <div class="">
                <a href="#!" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Forgot Password ?</a>
            </div>

            <button class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Login</button>
            </form>
        </div>
        <div class="text-grey-dark mt-6">
        don't have an account? 
        <a class="no-underline border-b border-blue text-blue" href="signup">
        Sign up
        </a>
    </div>
    </div>


</body>
</html>
