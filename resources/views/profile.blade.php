<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-full max-w-screen-xl bg-white border border-gray-200 rounded-bl-[50px] shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-bl-[30px] shadow-lg" src="public/img/user.png"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Siapa Hayo</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
    </div>
</div>
<div class="mt-8 items-center pb-10 ">
    <h1 class="mb-3 text-gray-500 dark:text-gray-800">Hi, Siapa Hayo</h1>
    <p>Apa yang anda butuhkan?</p>
</div>

<div class="grid grid-cols-2 gap-2 mt-8">
  <button type="submit" class="flex justify-start text-white bg-blue-700 hover:bg-blue-800 focus:ring- focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-9 py-7 text-center dark:bg-cyan-950 dark:hover:bg-cyan-950 dark:focus:ring-blue-800">Reservasi</button>
  <button type="submit" class="flex justify-start text-white bg-blue-700 hover:bg-blue-800 focus:outline-none  font-medium rounded-lg text-sm px-9 py-7 text-center dark:bg-red-600 dark:hover:bg-red-700 ">Reschedule</button>
  </div>

</body>
</html>