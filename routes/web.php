<?php

use App\Http\Controllers\pages\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomeController::class, 'home'])->name("dashboard");
Route::get("/catagory", [HomeController::class, 'category'])->name("category");
Route::get("/author", [HomeController::class, 'author'])->name("author");
Route::get("/borrowing", [HomeController::class, 'borrowing'])->name("borrowing");
