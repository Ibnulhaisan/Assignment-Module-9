<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'page']);

Route::get('home',[HomeController::class,'home'])->name('homeInfo');
Route::get('about',[HomeController::class,'about'])->name('aboutInfo');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('project',[HomeController::class,'project'])->name('projectInfo');


