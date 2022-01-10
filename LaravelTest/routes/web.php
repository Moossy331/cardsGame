<?php

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

use App\Http\Controllers\TestController;

Route::get('/', function(){
    return view('login.login');
});

Route::get('/home', function(){
    return view('member.home');
});
Route::get('/checkout', function(){
    return view('member.checkout');
});
Route::get('/information', function(){
    return view('member.user_information');
});
Route::get('/game_report', [TestController::class, 'test']);

Route::get('/game_report_view', function(){
    return view('member.game_report_view');
});
Route::get('/friends', function(){
    return view('member.friends');
});
Route::get('/friends_add', function(){
    return view('member.friends_add');
});
Route::any('/login', [TestController::class, 'test2']);
Route::get('/counter', function(){
    return view('counter.home_counter');
});
Route::get('/table', function(){
    return view('counter.gameTable');
});
Route::get('/place_report_counter', function(){
    return view('counter.place_report_counter');
});
