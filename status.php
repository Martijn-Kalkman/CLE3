<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->



    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/status.css">

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
            <div class="bg-blue-500 text-white p-4 m-6 w-full md:w-3/4">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Card 1</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">This is the content of Card 1.</p>
                    <button class="favorite-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="favorite-label">Add to Favorites</span>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Card 2</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">This is the content of Card 2.</p>
                    <button class="favorite-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="favorite-label">Add to Favorites</span>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

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

    <h1>Product Reviews</h1>
    <div id="reviews"></div>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" required>
        <label for="rating">Rating:</label>
        <select id="rating" required>
            <option value="">--Please choose an option--</option>
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
        </select>
        <label for="comment">Comment:</label>
        <textarea id="comment" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <script>
        const favoriteBtns = document.querySelectorAll('.favorite-btn');

        // Load existing favorites from local storage
        let favorites = JSON.parse(localStorage.getItem('favorites')) || {};

        // Add event listeners to favorite buttons
        for (let i = 0; i < favoriteBtns.length; i++) {
            const favoriteBtn = favoriteBtns[i];
            const card = favoriteBtn.closest('.max-w-sm');
            const title = card.querySelector('h5').textContent.trim();

            // Check if this card is already favorited
            if (favorites[title]) {
                favoriteBtn.classList.add('bg-yellow-400');
                favoriteBtn.querySelector('.favorite-label').textContent = 'Remove from Favorites';
            }

            // Add click event listener to the favorite button
            favoriteBtn.addEventListener('click', () => {
                if (favorites[title]) {
                    // Remove from favorites
                    delete favorites[title];
                    favoriteBtn.classList.remove('bg-yellow-400');
                    favoriteBtn.querySelector('.favorite-label').textContent = 'Add to Favorites';
                } else {
                    // Add to favorites
                    favorites[title] = true;
                    favoriteBtn.classList.add('bg-yellow-400');
                    favoriteBtn.querySelector('.favorite-label').textContent = 'Remove from Favorites';
                }

                // Save favorites to local storage
                localStorage.setItem('favorites', JSON.stringify(favorites));
            });
        }

    </script>



</main>

<script src="https://cdn.tailwindcss.com"></script>
<script src="status.js"></script>
</body>
</html>