<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuthController;
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
//     return view('register');
// });

// Route::get('login', function () {
//     return view('login');
// });
Route::get('/',[MyAuthController::class,'register']);
Route::get('login',[MyAuthController::class,'login']);
Route::post('register_save',[MyAuthController::class,'register_save']);
Route::post('login_check',[MyAuthController::class,'login_check']);
Route::get('profile',[MyAuthController::class,'profile']);

Route::get('logout',[MyAuthController::class,'logout']);
