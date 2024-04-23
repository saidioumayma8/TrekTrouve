<?php

use Illuminate\Support\Facades\Auth;
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
// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // User management
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users.index');
    // Route::delete('/admin/users/{id}/delete', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    Route::delete('/admin/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');



    // Post management
    Route::get('/admin/posts', [AdminController::class, 'managePosts'])->name('admin.posts.index');
    Route::post('/admin/posts/{id}/update', [AdminController::class, 'updatePost'])->name('admin.posts.update');
    Route::delete('/admin/posts/{id}/delete', [AdminController::class, 'deletePost'])->name('admin.posts.delete');

    // Excursion management
    Route::get('/admin/excursions', [AdminController::class, 'manageExcursions'])->name('admin.excursions.index');
    Route::post('/admin/excursions/{id}/update', [AdminController::class, 'updateExcursion'])->name('admin.excursions.update');
    Route::delete('/admin/excursions/{id}/delete', [AdminController::class, 'deleteExcursion'])->name('admin.excursions.delete');
});

// Guide routes
Route::middleware(['auth', 'role:guide'])->group(function () {
    Route::get('/guide', [trailController::class, 'index'])->name('guide');
    Route::get('/guide/create', [trailController::class, 'create'])->name('guide.create');
    Route::post('/guide/store', [trailController::class, 'store'])->name('guide.store');
});

// User routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::post('/trail_reserv/{excursion}', [TrailController::class, 'reserve'])->name('trail_reserv');
    Route::get('/user', [ExcursionController::class, 'index'])->name('user');

    Route::resource('/communitypost', CommunityPostController::class);
Route::get('/post/{id}', [CommunityPostController::class, 'show'])->name('post.show');
Route::get('/post_create', [CommunityPostController::class, 'create'])->name('post.create');
Route::post('/post/store', [CommunityPostController::class, 'store'])->name('post.store');

});

// Other routes
Route::get('/guide/trail/{excursion}', [trailController::class, 'showTrail'])->name('guide.trail');
Route::get('/trail/{id}', [TrailController::class, 'show'])->name('trail.show');


// Authentication routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'loginpost'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [ExcursionController::class, 'index'])->name('home');
