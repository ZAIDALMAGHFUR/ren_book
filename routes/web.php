<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RentlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [PublicController::class, 'index']);

Route::middleware('OnlyGuest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'autenticating']) ->name('login');
    Route::get('register', [AuthController::class, 'register']) ->name('register');
    Route::post('register', [AuthController::class, 'registerProcess']);
});
Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index']) ->Middleware('OnlyAdmin');
    Route::get('profile', [UserController::class, 'profile']) ->Middleware('OnlyClient');
    Route::middleware('OnlyAdmin')->group(function () {
        Route::get('users', [UserController::class, 'index']);
        Route::get('register-user', [UserController::class, 'register']);
        Route::get('user-detail/{slug}', [UserController::class, 'show']);
        Route::get('user-acc/{slug}', [UserController::class, 'acc']);
        Route::get('user-ban/{slug}', [UserController::class, 'hapus']);
        Route::get('user-destroy/{slug}', [UserController::class, 'destroy']);
        Route::get('user-kehapus', [UserController::class, 'kehapus']);
        Route::get('user-restore/{slug}', [UserController::class, 'restore']);
        Route::get('books', [BookController::class, 'index']);
        Route::get('book-add', [BookController::class, 'add']);
        Route::post('book-add', [BookController::class, 'store']);
        Route::get('book-edit/{slug}', [BookController::class, 'edit']);
        Route::put('book-edit/{slug}', [BookController::class, 'update']);
        Route::get('book-delete/{slug}', [BookController::class, 'delete']);
        Route::get('book-destroy/{slug}', [BookController::class, 'destroy']);
        Route::get('book-deleted', [BookController::class, 'deleted']);
        Route::get('book-deleted', [BookController::class, 'deletedbook']);
        Route::get('book-restore/{slug}', [BookController::class, 'restore']);
        Route::get('categories', [CategoryController::class, 'index']);
        Route::get('category-add', [CategoryController::class, 'add']);
        Route::post('category-add', [CategoryController::class, 'store']);
        Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
        Route::put('category-edit/{slug}', [CategoryController::class, 'update']);
        Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
        Route::get('category-destroy/{slug}', [CategoryController::class, 'destroy']);
        Route::get('category-deleted', [CategoryController::class, 'deletedcategory']);
        Route::get('category-restore/{slug}', [CategoryController::class, 'restore']);
        Route::get('rentlog', [RentlogController::class, 'index']);
    });
});