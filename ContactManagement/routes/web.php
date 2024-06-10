<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

// Default route - Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentication routes
Route::get('/login', [AuthManager::class, 'login'])->name('login'); // Show login form
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); // Handle login form submission
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration'); // Show registration form
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post'); // Handle registration form submission
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout'); // Logout user

// Protected route - User profile
Route::group(['middleware' => 'auth'], function (){
    Route::get('/profile', function (){
        return "Hi";
    });
});
