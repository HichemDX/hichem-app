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
  <div class="flex items-center ">
    <div class="w-[281px] h-screen  bg-[#3E3E3E] flex flex-col justify-between">
      <!-- image -->
      <div class="pt-8">
        <center>
          <img src="/assets/hichem.jpg" alt="#" class="rounded-full w-24  h-24 border-4 border-white">
          <p class="text-white pt-2">KHELLAF Hichem</p>
        </center>
      </div>


      
      <!-- ul -->
      <div>
        
        <center>
          <ul class="">
            <br>

            @yield('content')

          </ul>
        

        </center>
      </div> 
       <div>
            <div class="bg-[#F16B07] flex  justify-center items-center h-20 gap-4 text-white text-xl ">
              <img src="/assets/Vector.png" alt="">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Déconnexion') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>

            </div>
          </div>
    </div>
    <div class="w-screen h-screen p-6 ">
      <br>
      <div class="flex items-center  justify-between">
        <!-- nom + serch + button creé -->
        @yield('head')
        <div class="flex items-center gap-14">
          <!-- serch bar -->
          

          <!-- button cree -->
          @yield('bt-cree')
        </div>

        @yield('sec')
        @yield('cont')
        @yield('cree-user')
      </div>
      

    </div>
</body>

</html>