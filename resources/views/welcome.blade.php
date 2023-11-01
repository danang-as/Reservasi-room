<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reservasi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body>
      <div>
      <nav class="bg-white border-gray-200 dark:bg-cyan-950 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-2.5">
    <a href="#" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-cyan-950 focus:outline-none focus:ring-2 focus:ring-cyan-950 dark:text-gray-400 dark:hover:bg-cyan-950 dark:focus:ring-cyan-950" aria-controls="navbar-dropdown" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm  md:border-0 md:bg-white dark:bg-cyan-950 md:dark:bg-cyan-950 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Reservasi</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Reschedule</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
      
    <section class="bg-center bg-no-repeat bg-cyan-950 bg-blend-multiply">
    <div class="py-8 px-4 mx-auto min-h-screen  text-center lg:py-16 z-10 relative">

    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Reservasi</h1>
    


    
  <!-- <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>


  <div class="w-full block flex-grow lg:flex lg:items-center border rounded-bl-[150px] lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-white mr-4">
        Reservasi
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-white mr-4">
        Reschedule
      </a>
      <a href="#responsive-header" class="block mt-4 py-2 px-4 lg:mt-0 lg:inline-block lg:mt-0 text-gray-100 hover:text-white">
        Logout
      </a>
    </div>
  </div> -->

<div class="mx-auto mt-9 p-8 bg-gray-100 shadow-md p-5 space-y-5  rounded-bl-[50px]">
    <!-- <div class=""> -->

<form>
  <div class="mb-6">
    <label class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">Pilih Ruangan :</label>
    <div class="relative">
        <select class="block normal-case appearance-none w-full bg-gray-300  text-gray-700 py-3 px-4 pr-8 rounded-bl-[20px] leading-tight focus:outline-none focus:bg-white focus:border-gray-700" id="grid-state">
          <option>Ruang Kolaborasi</option>
          <option>Ruang Amanah</option>
        </select>
  </div>
  <div class="mb-6 mt-2">
    <label class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">Tanggal :</label>
    <div date-rangepicker class="flex items-center">
  <div class="relative">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
         <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
    </div>
    <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
  </div>
  <span class="mx-4 text-gray-500">to</span>
  <div class="relative">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
         <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
    </div>
    <input name="end" type="text" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
</div>
</div>
  </div>
  <div class="mb-6 mt-2">
    <label for="kegiatan" class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">Kegiatan</label>
    <input class="flex items-start shadow-sm bg-gray-50  text-gray-900 text-sm rounded-bl-[20px] focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>

  <div class="mb-6 mt-2">
    <label for="repeat-password" class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">Nama penanggung jawab</label>
    <input class="flex items-start shadow-sm bg-gray-50  text-gray-900 text-sm rounded-bl-[20px] focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>

  <div class="mb-6">
    <label class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">direktorat:</label>
    <div class="relative">
        <select class="block normal-case appearance-none w-full bg-gray-300  text-gray-700 py-3 px-4 pr-8 rounded-bl-[20px] leading-tight focus:outline-none focus:bg-white focus:border-gray-700" id="grid-state">
          <option>Purel</option>
          <option>Sekretariatan</option>
        </select>
  </div>

  <div class="mb-6">
    <label class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">divisi:</label>
    <div class="relative">
        <select class="block normal-case appearance-none w-full bg-gray-300  text-gray-700 py-3 px-4 pr-8 rounded-bl-[20px] leading-tight focus:outline-none focus:bg-white focus:border-gray-700" id="grid-state">
          <option>Purel</option>
          <option>Sekretariatan</option>
        </select>
  </div>

  <div class="mb-6">
    <label class="flex justify-start block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700">bagian:</label>
    <div class="relative">
        <select class="block normal-case appearance-none w-full bg-gray-300  text-gray-700 py-3 px-4 pr-8 rounded-bl-[20px] leading-tight focus:outline-none focus:bg-white focus:border-gray-700" id="grid-state">
          <option>Purel</option>
          <option>Sekretariatan</option>
        </select>
  </div>

  <div class="mx-auto mt-9 p-8 bg-gray-100 shadow-md p-5 space-y-5  rounded-bl-[50px]">
    <!-- <div class=""> -->



  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
    </div>
    <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-700">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
  </div>
  <div class="grid grid-cols-2 gap-2">
  <button type="submit" class="flex justify-start text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-bl-[20px] text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
  <button type="submit" class="flex justify-start text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-br-[20px] text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Selanjutnya</button>
  </div>
</form>

<!-- <form>
    <div class=" mb-6">
      <label class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-700" for="grid-last-name">
        Kode Booking :
      </label >
      <div class="relative">
        <select class="block normal-case appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>RM0001</option>
          <option>RM0002</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="mb-6">
      <label class="block normal-case tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Pilih Ruangan :
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>Ruangan 01</option>
          <option>Ruangan 02</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
    <div class="mb-6">
      <label class="block normal-case tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Kegiatan
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
    </div>
    <div class="mb-6 ">
      <label class="block normal-case tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Jumlah Panitia
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="">
    </div>
    <div class="mb-6 ">
      <label class="block normal-case tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Jumlah Peserta
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="">
    </div>
    <div class="mb-9 mt-9 ">
        <input checked id="red-checkbox" type="checkbox" value="" class="w-4 h-4 text-red-600 rounded-full bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="red-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Red</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-bl-[150px] text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pilih</button>
</form> -->
</div>
</div>
</div>
</div>
</section>
    </body>
</html>
