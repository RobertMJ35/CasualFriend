<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FriendController;

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
Route::get('/board', [Controller::class, "onboarding"]);
Route::get('/board/{gender?}', [Controller::class, "onboarding"]);
Route::get('/search', [Controller::class, "search"]);

Route::get('/login', [UserController::class, "login"])->name('login_page');
Route::post('/login/auth', [UserController::class, "loginProcess"])->name('login');

Route::get('/register', [UserController::class, "register"]);
Route::post('/register/auth', [UserController::class, "registerProcess"])->name('register');

Route::get('/register/profile', [UserController::class, "profile"]);
Route::post('/register/profile/val', [UserController::class, "profileProcess"])->name('profile');

Route::get('/register/payment', [UserController::class, "payment"]);
Route::post('/register/payment/process', [UserController::class, "paymentProcess"])->name('payment');

Route::get('/logout', [UserController::class, "logout"])->name('logout');

Route::get('/home', [Controller::class, "homePage"])->name('home');
Route::get('/home/{gender?}', [Controller::class, "homePage"]);
Route::get('/home/search', [Controller::class, "searchHome"]);

Route::get('/setting', [Controller::class, "setting"])->name('setting');
Route::post('/setting/save', [UserController::class, "saveChanges"]);
Route::get('/setting/topup', [UserController::class, "addCoin"]);
Route::get('/setting/hide', [UserController::class, "hide"]);
Route::get('/setting/unhide', [UserController::class, "unhide"]);


Route::get('/friend', [FriendController::class, "friendPage"])->name('friend');
Route::get('/friend/{id}', [FriendController::class, "sendFriendReq"]);

Route::get('/chat', function(){
    return view('chat');
});

Route::get('/friend', function(){
    return view('friend');
});

Route::get('/avatar', function(){
    return view('avatar');
});

// Route::get('/setting', function(){
//     return view('setting');
// });

Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return back();
});
