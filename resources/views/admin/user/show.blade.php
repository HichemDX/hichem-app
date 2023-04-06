@extends('.\admin\layout')


@section('content')
<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/private/Gere_unite">Gérer les unités</a>
</li>
<li class="text-white text-xl bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/user">Gérer les <br>
    Contrôles de gestion</a>
</li>
<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="#">Gérer les Directions</a>
</li>
<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="#">Gérer les produits</a>
</li>

<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="#">Gérer les familles</a>
</li>

@endsection
@section('sec')
</div>
<br><br>
<!-- tete de table -->
<div class="bg-[#F3F6F9] w-full flex justify-between p-2 rounded-lg">
  <h3 class="">Gestionnaire</h3>
  <div class="flex gap-44 ">
    <h3>Unites</h3>
    <h3>Date de entre</h3>
  </div>
  <div>

  </div>
</div>
@endsection
@section('head')
<h1 class="text-2xl">Les Contrôles de gestion</h1>
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
@endsection


@section('cont')
<ul>

  <li>
    <div class="w-full flex justify-between p-2 pt-4 rounded-lg items-center">
      <div class="text-sm pr-8">
        <h3>{{$user['username']}}</h3>
        <h6 class="text-[#B5B5C3]">Gestionnaire nationale</h6>
      </div>
      <div class="flex gap-44 justify-center items-center">
        <div>
          <h3>{{$user['position']}}</h3>
          <h6 class="text-[#B5B5C3]">b12500</h6>
        </div>

        <div>
          <h3>{{$user['date']}}</h3>
        </div>
      </div>
      <div>
        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
          <a href="">modifier</a>
        </button>

      </div>
    </div>
  </li>




</ul>

@endsection

@section('bt-cree')
<button class="bg-[#F16B07] text-white p-2 h-11 rounded-xl w-28">
  <a href="/private/Gere_unite/Creé_user">Créer</a>
</button>
@endsection


