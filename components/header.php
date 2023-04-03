<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body>

<nav class="bg-white px-2 sm:px-4 py-2.5 rounded w-full">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="index.php" class="flex items-center decoration">
            <img src="./images/handilogoicon.png" class="h-6 mr-3 sm:h-9" alt="" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">Handitransport</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-black rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-colmt-4 md:flex-row md:space-x-8 md:mt-0 md:font-medium md:bg-white">
                <li>
                    <a href="reisplannen.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded text-decoration-line: none; decoration">Reis Plannen</a>
                </li>
                <li>
                    <a href="contact.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded text-decoration-line: none; decoration">Contact</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded"><i class="fa-regular fa-moon fa-lg decoration"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://kit.fontawesome.com/a95a0af67a.js" crossorigin="anonymous"></script>
</body>
</html>