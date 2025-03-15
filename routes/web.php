<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get("/", [PagesController::class, "index"])->name('index');

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/signup", [AuthController::class, "signup"])->name("signup");

Route::post("/login-post", [AuthController::class, "postLogin"])->name("post.login");
Route::post("/signup-post", [AuthController::class, "postSignup"])->name("post.signup");

Route::get("/logout", [AuthController::class, "logout"])->name("logout");


Route::resource("/students", StudentController::class);