<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssistantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route pour l'assistant social
Route::get('/assistant-register', [App\Http\Controllers\AssistantController::class, 'store'])->name('assistants.assistantStore');
Route::post('/assistant-create',[App\Http\Controllers\AssistantController::class,'AssistantStore'])->name('assistant.create');
Route::get('/assistant-dashboard',[App\Http\Controllers\AssistantController::class,'dashboard'])->name('assistant.dashboard');
//Route::post('/assistant-create',[App\Http\Controllers\AssistantController::class,'AssistantStore'])->name('assistant.create');



//route pour l'infirmier
Route::get('/infirmier-register', [App\Http\Controllers\InfirmierController::class, 'store'])->name('infirmiers.infirmierStore');
Route::post('/infirmier-create',[App\Http\Controllers\InfirmierController::class,'InfirmierStore'])->name('infirmier.create');
Route::get('/infirmier-dashboard',[App\Http\Controllers\AssistantController::class,'dashboard'])->name('infirmier.dashboard');





//route pour le technicien
Route::get('/technicien-register', [App\Http\Controllers\TechnicienController::class, 'store'])->name('techniciens.technicienStore');
Route::post('/technicien-create',[App\Http\Controllers\TechnicienController::class,'TechnicienStore'])->name('technicien.create');
Route::get('/technicien-dashboard',[App\Http\Controllers\AssistantController::class,'dashboard'])->name('technicien.dashboard');

//ROUTE POUR AFFICHER DONNEURS
Route::resource('donneurs','DonneurController@store');
