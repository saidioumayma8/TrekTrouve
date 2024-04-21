<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\trailController;
use App\Http\Controllers\excursionController;
use App\Http\Controllers\CommunityPostController;
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
// Route::get('/',function(){
//     $user = \App\Models\User::first();

//     dd($user->role);
// });
Route::get('/',[excursionController::class, 'index']);
Route::middleware(['auth', 'role:admin'])->group(function () {
 route::get('/admin', function () {
    return 'bonjour Admin';
 })->name("admin");
});
Route::middleware(['auth', 'role:guide'])->group(function () {
 route::get('/guide', function () {
    return 'bonjour Admin';
 })->name("guide");
 Route::get('/guide/create', [trailController::class, 'create'])->name('guide.create');
Route::post('/guide/store', [trailController::class, 'store'])->name('guide.store');


});

Route::get('/guide/trail/{excursion}', [trailController::class, 'showTrail'])->name('guide.trail');
Route::get('/trail/{id}', [TrailController::class, 'show'])->name('trail.show');
Route::get('/post/{id}', [CommunityPostController::class, 'show'])->name('post.index');
Route::get('/post/create', [CommunityPostController::class, 'create'])->name('post.create');
Route::post('/post/store', [CommunityPostController::class, 'store'])->name('post.store');

Route::resource('/communitypost', CommunityPostController::class);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerrf', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');




