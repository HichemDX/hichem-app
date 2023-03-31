<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  @vite('resources/css/app.css')
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <style>
    body {
      font-family: 'Lato', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

  </style>

</head>

<body class="overflow-hidden">
  <div class="flex items-center">
    <div class="w-[281px] h-screen  bg-[#3E3E3E]">
      <!-- image -->
      <div class="pt-8">
        <center>
          <img src="/assets/hichem.jpg" alt="#" class="rounded-full w-24  h-24 border-4 border-white">
          <p class="text-white pt-2">KHELLAF Hichem</p>
        </center>
      </div>

      <br>
      <!-- ul -->
      <div>
        <center>
          <ul class="">
            <br>

            @yield('content')

          </ul>

          <br>
          <br>
          <div class="bg-[#F16B07] flex  justify-center items-center h-20 gap-4 text-white text-xl">
            <img src="/assets/Vector.png" alt="">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Déconnexion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </div>

        </center>
      </div>
    </div>
    <div class="w-screen h-screen p-6 ">
      <br>
      <div class="flex items-center  justify-between">
        <!-- nom + serch + button creé -->
        <h1 class="text-2xl">Les Unites</h1>
        <div class="flex items-center gap-14">
          <!-- serch bar -->
          <form class="flex items-center w-96">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" id="simple-search" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>



          </form>

          <!-- button cree -->
          <button class="bg-[#F16B07] text-white p-2 h-11 rounded-xl w-28">Créer</button>
        </div>

      </div>
      <br><br>
      <!-- tete de table -->
<div class="bg-[#F3F6F9] w-full flex gap-44 p-2 rounded-lg">
<h3 class="mr-80">Unites</h3>
<h3>Position</h3>
<h3>Position</h3>
</div>

    </div>
  </div>
</body>

</html>