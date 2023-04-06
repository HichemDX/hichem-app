<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::middleware(['auth','role:admin'])->group(function () {

Route::get('/private', function () {
    return  view('./admin/unites_gere');
    
});
Route::get('/private/Gere_unite', function () {
  return  view('./admin/unites_gere');
  
});

Route::get('user/create_user', function () {
  return  view('./admin/user/cree');
  
});

Route::resource('user',UserController::class);

});




// gestion_gere.blade
