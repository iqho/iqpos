<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\UserDatatables;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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

//Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', AdminDashboardComponent::class)->name('dashboard');
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::get('/users', UserDatatables::class)->name('users.show');
});

// User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile.show');
});

// Route::get('/users', Users::class);
//Route::view('users','livewire.admin.show-user')->name('users.show');
