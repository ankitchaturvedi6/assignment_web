<?php  
session_start();
if(isset($_POST['logout'])) {
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
  include dirname(__FILE__).'/../Database/Model/fetch_object.php';

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
    <div class="container w-10/12 mx-auto my-2">
        div.grid.grid-rows
    </div>   
  </body>
  </html>

<!-- <script type="text/javascript">
    function sendRequest(status, id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            if(this.responseText) {
                document.querySelector('.request-btn').style.display = 'none';
                statusEl = document.querySelector('.request-response-status');
                statusEl.style.display = 'block';
                statusEl.textContent = status ? 'Approved' : 'Disapproved';
            }
        }
        xhttp.open("POST", 'status_update', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`id=${id}&status=${status}&status_update=true`);
    }
    document.getElementById('btn-approve')
    .addEventListener('click', () => {
        sendRequest(1, 1);
    })

    document.getElementById('btn-disapprove')
    .addEventListener('click', () => {
        sendRequest(0, 1);
    })


  </script> -->
