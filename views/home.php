<?php  
if(isset($_POST['logout'])) {
    session_unset(); 
    session_destroy(); 
    header('Location: login');  
}
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
include dirname(__FILE__).'/../Database/Model/upload_object.php';
?>

<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body style="background: #edf2f7;">
        <header class="bg-indigo-400">
            <?php include dirname(__FILE__).'/nav_header.php'; ?>
        </header>
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
          <div class="max-w-2xl w-full space-y-8">
            <div>
              <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
              <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Create Request 
            </h2>

      </div>
      <div>
          <?php
          echo $msg;
          ?>
      </div>
      <form class="mt-8 space-y-6 singup-form" action="" method="POST" enctype="multipart/form-data" onsubmit="return formValidation()" >
          <input type="hidden" name="remember" value="true">
          <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label class="block text-left">
                    <span class="text-gray-700">Details of Object</span>
                    <textarea
                    name="object_details"
                    id="details"
                    class="form-textarea mt-1 block w-full p-2"
                    rows="3"
                    placeholder="Enter details of object."
                    ></textarea>
                </label>
            </div> 
            <div>
                <label class="block text-left my-2" style="max-width: 400px">
                    <span class="text-gray-700">Contact Method</span>
                    <select name="contact_method" name="contact_method" id="contact_method" class="form-select block w-full mt-1 p-2 bg-white">
                        <option value="1" selected>Phone</option>
                        <option value="2">Email</option>
                    </select>
                </label>
            </div> 
            <div>
                <div class="flex mt-8">
                    <div id="image_selector" class="rounded-lg shadow-xl bg-gray-50">
                        <div class="m-4">
                            <label class="inline-block mb-2 text-gray-500">Upload
                            Image(jpg,png,svg,jpeg)</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                    </svg>
                                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                       Select a photo
                                   </p>
                               </div>
                               <input type="file" class="opacity-0" name="object_img" id="object_img" accept="image/*"/>
                           </label>
                       </div>
                   </div>

               </div>
               <div>

                   <div class="relative">
                      <img src="#" class="image w-42 h-42" id="selected_image" style="display: none;">
                      <button class="absolute left-0">remove</button>
                  </div>
              </div>
          </div>

      </div>
  </div>
  <div>
    <button type="submit" name="object_upload" value="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      <span class="absolute left-0 inset-y-0 flex items-center pl-3">
        <!-- Heroicon name: solid/lock-closed -->
        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
      </svg>
  </span>
  Submit
</button>

</div>
</form>
</div>
</div>


</body>
</html>


<script type="text/javascript">

    function formValidation() {
        const details = document.getElementById('details').value;
        const image = document.getElementById('image');
        console.log(image.files[0], URL.createObjectURL(image.files[0]));
        return false;
    }

    document.getElementById('image').addEventListener('change', function(event) {
        // console.log(URL.createObjectURL(event.target.files[0]));
        const path = URL.createObjectURL(event.target.files[0])

        const selImgEl = document.getElementById('selected_image');
        selImgEl.src = path;
        selImgEl.style.display = 'block';
        document.getElementById('image_selector').style.display = 'none';
    })
</script>





