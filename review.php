
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/review.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
    <script src="review.js"></script>



  <title>Reviews-Handitransport</title>
</head>
<?php require_once('components/header.php'); ?>
<body class="">

<svg class="absolute z-10" width="1443" height="951" viewBox="0 0 1443 951" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1440.59 475.597C1475.63 888.507 1078.69 867.195 0.871216 950.28V0.898692C523.745 128.959 1405.54 62.6862 1440.59 475.597Z" fill="#49A078" />
</svg>
<main class="absolute z-20 w-full">
    <!--    review gemiddelde-->
    <div class ="reviewaverage" id="reviewaverage">

    </div>
    <!--Form-->
    <div class="formfield max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-700" >
    <form>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    </div>
  <!--voorgaande reviews simpel-->
    <div id="all-reviews">

    </div>
<!--    dialoogvenster-->
    <dialog class="modal max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-700" id="review-detail">
        <button class="modal-close">❌</button>
        <div class="modal-content"></div>

    </dialog>


</main>


</body>
</html>