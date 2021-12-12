<?php  
session_start();
if($_SESSION['level_id'] != 1) {
    header('Location: Home'); 
}
if(isset($_POST['logout'])) {
    session_unset(); 
    session_destroy(); 
    header('Location: Login');  
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
    <div class="container">
        <?php foreach($products as $product): ?>
            <div class="w-8/12 mx-auto my-2">
                <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0">
                  <img class="h-24 md:w-6/12 md:h-auto md:rounded-none rounded-full mx-auto" src="assets/img/<?=$product['image']?>" alt="" width="384" height="512" type="img">
                  <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <blockquote>
                      <p class="text-lg font-medium">
                        <?= $product['details']; ?>
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <div class="text-sky-500">
                        By <?= $product['first_name'] . $product['last_name']; ?>
                    </div>
                </figcaption>
                <?php if($product['status'] == 2): ?>
                    <div class="request-btn">
                        <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 btn-approve" id="<?= $product['user_id']; ?>">Approve</button>
                        <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 btn-disapprove" id="<?= $product['user_id']; ?>">Disapprove</button>
                    </div>
                <?php endif; ?>

                <?php $displayType = 'none';
                if($product['status'] != 2) $displayType = 'block';
                ?>
                <p style="display:<?=$displayType?>;" class="text-blue-600 request-response-status">

                    <?php if($product['status'] == 1) echo "Approved";
                        if($product['status'] == 0) echo "Disapproved";
                    ?> 

                </p>
            </div>
        </figure>
    </div>
<?php endforeach; ?>
</div>   
</body>
</html>

<script type="text/javascript">
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

    const approveBtns = document.querySelectorAll('.btn-approve');
    const disapproveBnts = document.querySelectorAll('.btn-disapprove');

    approveBtns.forEach(elem => {
        elem.addEventListener('click', () => {
            sendRequest(1, elem.id);
        })

    })

    disapproveBnts.forEach(elem => {
        elem.addEventListener('click', () => {
            sendRequest(0, elem.id);
        })

    })


</script>
