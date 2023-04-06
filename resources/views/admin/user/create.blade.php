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

@section('cree-user')
<div class=" w-full h-full">
  <center>
    <div>
      <h1 class="text-4xl font-medium">Créer gestionnaire</h1>
    </div>
    <div class="pt-16">
      <form method="post" action="{{route('user.store')}}" class="bg-red-50 p-4 rounded-lg">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
            <input type="text" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
          </div>
          <!-- <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
          </div> -->
          <!-- <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">sélectionner unité</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Choose a country</option>
              <option value="US">United States</option>
              <option value="CA">Canada</option>
              <option value="FR">France</option>
              <option value="DE">Germany</option>
            </select>
          </div>

          <div> -->
            <!-- <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">sélectionner Fonctionnement</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Choose a country</option>
              <option value="US">United States</option>
              <option value="CA">Canada</option>
              <option value="FR">France</option>
              <option value="DE">Germany</option>
            </select>
          </div>
        </div> -->
        <div class="mb-6">
          <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">postion</label>
          <input type="text" id="position" name="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="Nom d'utilisateur" required>
        </div>
        <!-- <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
          <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="•••••••••" required>
        </div>
        <div class="mb-6">
          <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
          <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="•••••••••" required>
        </div> -->
        <button type="submit" class="text-white bg-[#F16B07] hover:bg-[#db6811]  focus:ring-[#F16B07] font-medium rounded-lg w-full h-12 mt-10">Confirmer</button>
      </form>
    </div>
  </center>
</div>
@endsection