<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExcursionController;
use App\Http\Controllers\homecontroller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
route::middleware(['auth', 'role:admin'])->group(function () {
 route::get('/admin', function () {
    return 'bonjour Admin';
 })->name("admin");
});

route::middleware(['auth', 'role:user'])->group(function () {
    route::get('/user', function () {
       return 'bonjour user';
    })->name("user");
   });

route::middleware(['auth', 'role:guide'])->group(function () {
    route::get('/guide', function () {
       return 'bonjour guide';
    })->name("guide");
   });

Route::get('/register', [AuthController::class, 'register'])->name('register'); // Unique name for GET route
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post'); // Unique name for POST route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');
Route::get('/home', [homecontroller::class, 'index']);


Route::get('/guide/create', [ExcursionController::class, 'create'])->name('guide.create');
Route::post('/guide/store', [ExcursionController::class, 'store'])->name('guide.store');



