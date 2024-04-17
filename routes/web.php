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

Route::get('/register', [AuthController::class, 'register'])->name('register'); // Unique name for GET route
Route::post('/registerrf', [AuthController::class, 'registerPost'])->name('register.post'); // Unique name for POST route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');
Route::get('/home', [homecontroller::class, 'index']);


Route::get('/guide/create', [ExcursionController::class, 'create'])->name('guide.create');
Route::post('/guide/store', [ExcursionController::class, 'store'])->name('guide.store');



