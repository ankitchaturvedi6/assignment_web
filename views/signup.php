<?php   
include dirname(__FILE__).'/../Database/Model/registration.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body  style="background: #edf2f7;">
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-2xl w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Sign up to your account
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        <a href="login" class="font-medium text-indigo-600 hover:text-indigo-500">
          Sign in
        </a>
      </p>
    </div>
    <?php
    if($email_error){
      echo "<div>
      $email_error
      </div>";
    }
    ?>
    <form class="mt-8 space-y-6 singup-form" action=" " method="POST" onsubmit="return formValidation()" >
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="first-name" class="sr-only">First Name</label>
          <input minlength="4" id="first-name" name="firstName" type="text" autocomplete="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm my-2 required" placeholder="First Name">
        </div>  
        <div>
          <label for="last-name" class="sr-only">Last Name</label>
          <input minlength="4" id="last-name" name="lastName" type="text" autocomplete="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm my-2 required" placeholder="Last Name">
        </div>         
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm my-2 required" placeholder="Email address">
        </div>
        <div>
          <label for="mobile" class="sr-only">Mobile</label>
          <input id="mobile" name="mobile" type="number" autocomplete="number" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm my-2 required" placeholder="Mobile Number">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input minlength="6" id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm my-2 required" placeholder="Password">
        </div>
        <div class="grid grid-cols-4 gap-1">
        <span class="validation-capital-letters">
            <img src="https://img.icons8.com/ios/50/000000/ok--v1.png" class="w-8 h-8 img-validation"/>
                                <p class="text-xs w-fit">Capital Letter</p>
        </span>

        <span class="validation-small-letters">
            <img  src="https://img.icons8.com/ios/50/000000/ok--v1.png" class="w-8 h-8 img-validation"/>
            <p class="text-xs w-fit">Small Letter</p>
        </span>

                            <span class="validation-numerics">
                                <img src="https://img.icons8.com/ios/50/000000/ok--v1.png" class="w-8 h-8 img-validation"/>
                                <p class="text-xs w-fit">Numeric Value</p>
                            </span>

                            <span class="validation-spical-chars">
                                <img  src="https://img.icons8.com/ios/50/000000/ok--v1.png" class="w-8 h-8 img-validation"/>
                                <p class="text-xs w-fit">At Least One &$#@</p>
                            </span>
        </div>
        <div>
          <label for="confirm-password" class="sr-only">Confirm Password</label>
          <input minlength="6" id="confirm-password" name="confirm_password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm required my-2" placeholder="Confirm Password">
        </div>
      </div>
      <div>
        <button type="submit" name="registration" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign Up
        </button>
      </div>
    </form>
  </div>
</div>


</body>
</html>


<script type="text/javascript"> 

    const passEl = document.getElementById('password');
    passEl.addEventListener('input', (event) => {
        const ch = event.target.value;
        const gSrc = "https://img.icons8.com/color/48/000000/ok--v1.png";
        const bSrc = "https://img.icons8.com/ios/50/000000/ok--v1.png";
            document.querySelector('.validation-capital-letters')
            .querySelector('.img-validation').src = (/^(?=.*[A-Z]).+$/.test(ch)) ? gSrc : bSrc;
            document.querySelector('.validation-small-letters')
            .querySelector('.img-validation').src = (/^(?=.*[a-z]).+$/.test(ch)) ? gSrc : bSrc;
            document.querySelector('.validation-numerics')
            .querySelector('.img-validation').src = (/\d/.test(ch)) ? gSrc : bSrc;
            document.querySelector('.validation-spical-chars')
            .querySelector('.img-validation').src = (/^(?=.*[-+_!@#$%^&*., ?]).+$/i.test(ch)) ? gSrc : bSrc;
    })
    

    function formValidation() {
        const mobile = document.getElementById('mobile').value;
        const pass = passEl.value;
        const cnfPass = document.getElementById('confirm-password').value;
        const pattern = new RegExp(
          "^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#$%^&*.,?]).+$"
        );
        return !(
            pass !== cnfPass ||
            !(pattern.test(pass)) ||
            mobile.length !== 10
        );
    }


</script>




