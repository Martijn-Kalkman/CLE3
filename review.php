
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">
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
  <!--    column-->
  <!--    <div class="grid grid-cols-2 gap-4">-->
  <!--    Review achterlaten-->
<!--  <form action="">-->
<!--    <p>Laat een review achter voor dit station</p>-->
<!--    <input type="text" id="name" placeholder="Naam" required>-->
<!--    <input type="text" id="description" placeholder="Toelichting">-->
<!--    <input type="text" id="tags">-->
<!--  </form>-->
  <!--voorgaande reviews simpel-->
    <div id="all-reviews">

    </div>
<!--    dialoogvenster-->
    <dialog class="modal" id="review-detail">
        <div class="modal-content"></div>
        <button class="modal-close">❌</button>
    </dialog>


</main>


</body>
</html>