<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware("auth")->group(function (){
    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'laravel' => \Illuminate\Foundation\Application::VERSION,
            'php' => PHP_VERSION,
            'title' => "Halo World"
        ]);
    });

    Route::get('/user', function () {
        return inertia('User');
    })->name("user");
    Route::get('/settings', function () {
        return inertia('Setting');
    })->name("settings");


    Route::post("/logout", function (){
        dd("loggin the user out");
    })->name("logout");
});

Route::prefix("auth")->name("auth.")->controller(AuthController::class)->group(function (){
    Route::get("", "login")->name("login")->middleware("guest");
    Route::post("authenticate", "authenticate")->name("authenticate")->middleware("guest");
    Route::post("logout", "logout")->name("logout")->middleware("auth");
});
