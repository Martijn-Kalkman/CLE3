<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Rolstoel</title>
</head>

<body class="">
    <?php require_once('components/header.php'); ?>
    <svg class="absolute z-10 lg:w-[68rem] w-[22.5rem] sm:w-[20rem]" width="1443" height="951" viewBox="0 0 1443 951" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1440.59 475.597C1475.63 888.507 1078.69 867.195 0.871216 950.28V0.898692C523.745 128.959 1405.54 62.6862 1440.59 475.597Z" fill="#49A078" />
    </svg>
    <main class="absolute z-20 w-full">
        <div class="">
            <!-- <img class="mx-auto mt-40 " src="https://picsum.photos/seed/picsum/1200/300" alt="" srcset=""> -->
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="mx-auto mt-40 " src="https://picsum.photos/seed/picsum/1200/400" alt="" srcset=""></div>
                    <div class="swiper-slide"><img class="mx-auto mt-40 " src="https://picsum.photos/seed/picsum/1200/400" alt="" srcset=""></div>
                    <div class="swiper-slide"><img class="mx-auto mt-40 " src="https://picsum.photos/seed/picsum/1200/400" alt="" srcset=""></div>
                </div>
                <div class="swiper-button-next mt-12"></div>
                <div class="swiper-button-prev mt-12"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="flex flex-row  justify-between items-center mt-40 w-10/12 lg:w-9/12 mx-auto border-b-4 border-black pb-16">
            <div class="w-96">
                <p>Deze applicatie helpt rolstoelgebruikers om te controleren of een station toegankelijk is voor een rolstoel. Na uitgebreid onderzoek en eigen
                    ervaringen zijn wij erachter gekomen dat het een veelvoorkomend probleem is dat een station online als rolstoeltoegankelijk staat maar het op
                    locatie toch niet blijkt te zijn. Ook om te zien dat rolstoelgebruikers uren bezig zijn met het plannen van de reis, wij vinden dat dit anders
                    moet en hopen via deze website te kunnen helpen. Als u feedback heeft of graag iets wilt toevoegen, stuur ons een bericht via
                    ons <a class = "hyperlink" href="contact.php">contactformulier</a>!
                    <a href="webservice-sharon/index.php">reviews</a>
                </p>
            </div>
            <div class="">
                <img class="mx-auto w-96 lg:w-80" src="images/rolstoelgebruiker_instappen.jpg" alt="Rolstoel gebruiker die in het ov instapt"/>
            </div>
        </div>
        <div class="mt-40">
            <img class="mx-auto NSbanner object-cover" src="images/NS_banner.jpg" alt="Banner NS trein" srcset="">
        </div>
        <div class="flex flex-row flex-wrap justify-between items-center mt-40 w-8/12 mx-auto border-b-4 border-black pb-16">
            <div class="">
                <img class="mx-auto object-cover w-[30rem] sm:w-[20rem] lg:w-[30rem]" src="images/rolstoelgebruiker_metro.jpg" alt="" srcset="">
            </div>
            <div class="w-96">
                <h1><strong>Over ons</strong></h1>
                <p>Wij zijn vier studenten op de opleiding Creative Media & Game Technologies op de hogeschool van Rotterdam. Kijk hieronder om ons te leren
                kennen!</p>
            </div>
        </div>
        <div class="flex flex-row flex-wrap justify-between w-8/12 mx-auto my-40">
            <div class="flex flex-col">
                <img class="mx-auto w-40 rounded-full animate__pulse animate__animated g" src="./images/1671465292831.jpg" alt="" srcset="">
                <h1>Calvin</h1>
            </div>
            <div class="flex flex-col">
                <img class="mx-auto w-40 h-40 object-fit rounded-full animate__pulse animate__animated g" src="./images/Foto-Sharon.jpg" alt="" srcset="">
                <h1>sharon</h1>
            </div>
            <div class="flex flex-col">
                <img class="mx-auto w-40 rounded-full animate__pulse animate__animated g" src="./images/martijn.png" alt="" srcset="">
                <h1>martijn</h1>
            </div>
        </div>
        <?php require_once('components/footer.php'); ?>

    </main>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

</body>

</html>