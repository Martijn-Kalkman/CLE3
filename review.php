<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
    <script src="review.js"></script>


  <!-- Custom CSS -->
  <link rel="stylesheet" href="./styles/style.css">
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
<!--                                             review hoe ik het eruit wil laten zien-->
<!--  <article>-->
<!--    <div class="flex items-center mb-4 space-x-4">-->
<!--      <div class="space-y-1 font-medium dark:text-white">-->
<!--        <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">16 August 2014</time></p>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="flex items-center mb-1">-->
<!--      <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--      <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--      <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--      <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--      <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--    </div>-->
<!--    <p class="mb-2 font-light text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>-->
<!--    <p class="mb-3 font-light text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>-->
<!--  </article>-->
<!---->
<!--      Gemiddelde achtergelaten reviews-->
<!--  <div class="flex items-center mb-3">-->
<!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
<!--    <p class="ml-2 text-sm font-medium text-gray-900 dark:text-white">4.95 out of 5</p>-->
<!--  </div>-->
<!--  <p class="text-sm font-medium text-gray-500 dark:text-gray-400">... recensies</p>-->
<!--  <div class="flex items-center mt-4">-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">5 ster</span>-->
<!--    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">-->
<!--      <div class="h-5 bg-yellow-400 rounded" style="width: 70%"></div>-->
<!--    </div>-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">70%</span>-->
<!--  </div>-->
<!--  <div class="flex items-center mt-4">-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">4 ster</span>-->
<!--    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">-->
<!--      <div class="h-5 bg-yellow-400 rounded" style="width: 17%"></div>-->
<!--    </div>-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">17%</span>-->
<!--  </div>-->
<!--  <div class="flex items-center mt-4">-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">3 ster</span>-->
<!--    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">-->
<!--      <div class="h-5 bg-yellow-400 rounded" style="width: 8%"></div>-->
<!--    </div>-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">8%</span>-->
<!--  </div>-->
<!--  <div class="flex items-center mt-4">-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">2 ster</span>-->
<!--    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">-->
<!--      <div class="h-5 bg-yellow-400 rounded" style="width: 4%"></div>-->
<!--    </div>-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">4%</span>-->
<!--  </div>-->
<!--  <div class="flex items-center mt-4">-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">1 ster</span>-->
<!--    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">-->
<!--      <div class="h-5 bg-yellow-400 rounded" style="width: 1%"></div>-->
<!--    </div>-->
<!--    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">1%</span>-->
<!--  </div>-->
<!--  </div>-->

</main>


</body>
</html>