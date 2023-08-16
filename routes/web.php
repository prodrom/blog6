<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post("registerP",[LoginController::class,"registerp"])->name("admin.registerp");
Route::post("login",[LoginController::class,"loginp"])->name("admin.loginp");

Route::get("logout",[LoginController::class,"logoutp"])->name("admin.logoutp");



Route::group(["prefix"=>"admin", "middleware"=>["IsLogin"] ], function(){
    Route::get('/', function (){
        return view("admin.index");
    })->name("admin.index");
});
