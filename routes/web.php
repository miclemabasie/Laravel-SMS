<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get("/", [PagesController::class, "index"])->name('index');

Route::get("/login", [AuthController::class, "login"])->name("login");