<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [siteController::class, "home" ])->name("home");


Route::get("/about",[siteController::class, "aboutpage"])->name("aboutpage");

Route::get("/news",[siteController::class,"newspage"])->name("newspage");

Route::get("/contact",[siteController::class, "contact"])->name("contact");


