<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->



    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/status.css">

    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>Reviews-Handitransport</title>
</head>
<?php require_once('components/header.php'); ?>
<body class="">

<svg class="absolute z-10" width="1443" height="951" viewBox="0 0 1443 951" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1440.59 475.597C1475.63 888.507 1078.69 867.195 0.871216 950.28V0.898692C523.745 128.959 1405.54 62.6862 1440.59 475.597Z" fill="#49A078" />
</svg>

<main class="absolute z-20 w-full">

    <div class="flex flex-col md:flex-row m-6">
            <div class="text-white p-4 m-6 w-full md:w-3/4">
                <h2 class="mb-4 text-4xl  leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Status</h2>
                <div id="card-list"></div>

            </div>
        <div class="text-white p-4 w-full md:w-2/4 md:flex-col md:ml-6 md:mt-6">
            <div class="mb-4">
                <div id="image-container"></div>

            </div>
            <div class="mb-4 flex p-2 col text-black">
                <div id="name"></div>

            </div>

            <button id="modalbtn">

            </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal content -->
            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            <div id="elavatorStatus">

                            </div>
                        </h3>
                    </div>
                </div>
                <div class="mt-5 sm:mt-6">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button id="closeModal" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Close
          </button>
        </span>
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center">

    </div>


    <form id="status-form" class="w-full max-w-lg mx-auto">
        <form id="card-form" class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="name-input" class="block font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Naam
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" id="name-input" name="name-input" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" />
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="description-input" class="block font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Beschrijving
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" id="description-input" name="description-input" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" />
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <input type="button" value="Voeg status toe" onclick="addCardFromForm()" class="mb-5 bg-gray-800 shadow bg-custom hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" />
                </div>
            </div>
        </form>
    </form>




    <script>

    </script>



</main>

<script src="https://cdn.tailwindcss.com"></script>
<script src="status.js"></script>
</body>
</html>