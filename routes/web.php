<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, "onboarding"])->name('boarding');
Route::get('/{gender?}', [Controller::class, "onboarding"]);
// Route::get('/search', [Controller::class, "search"]);

// Route::get('/login', [UserController::class, "login"])->name('login_page');
// Route::post('/login/auth', [UserController::class, "loginProcess"])->name('login');
Route::get('/register', [UserController::class, "register"]);
Route::post('/register/auth', [UserController::class, "registerProcess"])->name('register');
Route::get('/register/profile', [UserController::class, "profile"]);
Route::post('/register/profile/val', [UserController::class, "profileProcess"])->name('profile');

Route::get('/home', [Controller::class, "homePage"])->name('home');
Route::get('/home/{gender?}', [Controller::class, "homePage"]);
Route::get('/logout', [UserController::class, "logout"])->name('logout');

// Route::get('/friend', [FriendController::class, "friendPage"])->name('friend');
// Route::get('/friend/{id}', [FriendController::class, "homePage"]);

Route::get('/login', function(){
    return view('account.login');
});

Route::get('/chat', function(){
    return view('chat');
});

Route::get('/friend', function(){
    return view('friend');
});

Route::get('/avatar', function(){
    return view('avatar');
});

Route::get('/setting', function(){
    return view('setting');
});

Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return back();
});
