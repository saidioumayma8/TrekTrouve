<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // User management
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::post('/admin/users/{id}/update', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/admin/users/{id}/delete', [AdminController::class, 'deleteUser'])->name('admin.users.delete');

    // Post management
    Route::get('/admin/posts', [AdminController::class, 'managePosts'])->name('admin.posts');
    Route::post('/admin/posts/{id}/update', [AdminController::class, 'updatePost'])->name('admin.posts.update');
    Route::delete('/admin/posts/{id}/delete', [AdminController::class, 'deletePost'])->name('admin.posts.delete');

    // Excursion management
    Route::get('/admin/excursions', [AdminController::class, 'manageExcursions'])->name('admin.excursions');
    Route::post('/admin/excursions/{id}/update', [AdminController::class, 'updateExcursion'])->name('admin.excursions.update');
    Route::delete('/admin/excursions/{id}/delete', [AdminController::class, 'deleteExcursion'])->name('admin.excursions.delete');
});
});
Route::middleware(['auth', 'role:guide'])->group(function () {
 route::get('/guide', function () {
    return 'bonjour Admin';
 })->name("guide");
 Route::get('/guide/create', [trailController::class, 'create'])->name('guide.create');
Route::post('/guide/store', [trailController::class, 'store'])->name('guide.store');


});
Route::middleware(['auth', 'role:user'])->group(function () {
 route::get('/guide', function () {
    return 'bonjour Admin';
 })->name("guide");
 Route::post('/trail_reserv{excursion}', [TrailController::class, 'reserve'])->name('trail_reserv');

});

Route::get('/guide/trail/{excursion}', [trailController::class, 'showTrail'])->name('guide.trail');
Route::get('/trail/{id}', [TrailController::class, 'show'])->name('trail.show');


Route::resource('/communitypost', CommunityPostController::class);
Route::get('/post/{id}', [CommunityPostController::class, 'show'])->name('post.index');
Route::get('/post/create', [CommunityPostController::class, 'create'])->name('post.create');
Route::post('/post/store', [CommunityPostController::class, 'store'])->name('post.store');


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerrf', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');




