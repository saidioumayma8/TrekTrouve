<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\guideController;
use App\Http\Controllers\trailController;
use App\Http\Controllers\excursionController;
use App\Http\Controllers\ReservationController;
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
    Route::delete('/admin/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');

    // Post management
    Route::get('/admin/posts', [AdminController::class, 'managePosts'])->name('admin.posts.index');
    Route::post('/admin/posts/{id}/update', [AdminController::class, 'updatePost'])->name('admin.posts.update');
    Route::delete('/admin/posts/{id}/delete', [AdminController::class, 'deletePost'])->name('admin.posts.delete');

    // Excursion management
    Route::get('/admin/excursions/index', [AdminController::class, 'manageExcursions'])->name('admin.excursions.index');
    Route::delete('/admin/excursions/{id}/delete', [AdminController::class, 'deleteExcursion'])->name('admin.excursions.delete');

    Route::patch('/admin/excursions/{id}/accept', [AdminController::class, 'acceptExcursion'])->name('admin.excursions.accept');
    Route::delete('/admin/excursions/{id}/reject', [AdminController::class, 'rejectExcursion'])->name('admin.excursions.reject');
    Route::patch('/admin/posts/{id}/accept', [PostController::class, 'acceptPost'])->name('admin.posts.accept');
    Route::delete('/admin/posts/{id}/reject', [PostController::class, 'rejectpost'])->name('admin.posts.reject');
});

// Guide routes
Route::middleware(['auth', 'role:guide'])->group(function () {

    Route::get('/guide', [ExcursionController::class, 'index'])->name('guide');
    Route::get('/guide/create', [trailController::class, 'create'])->name('guide.create');
    Route::post('/guide/store', [trailController::class, 'store'])->name('guide.store');
    Route::get('/guide/excursions', [guideController::class, 'index'])->name('guide.excursions');


    Route::get('/excursion/{id}', [excursionController::class, 'editExcursion'])->name('guide.excursion.edit');
    Route::put('/update_excursion/{id}', [excursionController::class, 'updateexcursion'])->name('update_excursion');
    Route::delete('/excursion/{id}/delete', [excursionController::class, 'deleteExcursion'])->name('guide.excursion.delete');

});

Route::resource('/communitypost', CommunityPostController::class);
Route::get('/post/{id}', [CommunityPostController::class, 'show'])->name('post.index');
Route::get('/post_create', [CommunityPostController::class, 'create'])->name('post.create');
Route::post('/post/store', [CommunityPostController::class, 'store'])->name('post.store');

Route::get('/posts', [PostController::class, 'index'])->name('post.singlepost');
Route::get('/post', [PostController::class, 'editpost'])->name('post.edit');
Route::put('/update_post/{id}', [PostController::class, 'updatepost'])->name('update_post');
Route::delete('/post/{id}/delete', [PostController::class, 'deletepost'])->name('post.delete');
Route::patch('/post/{id}/accept', [PostController::class, 'acceptpost'])->name('excursions.accept');
Route::delete('/post/{id}/reject', [PostController::class, 'rejectpost'])->name('reject');


// User routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::post('/trail_reserv/{excursion}', [TrailController::class, 'reserve'])->name('trail_reserv');
    Route::get('/user', [ExcursionController::class, 'index'])->name('user');
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

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
