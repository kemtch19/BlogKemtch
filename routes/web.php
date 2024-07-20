<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PostsController;

Route::get("/", homecontroller::class);

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get("/posts", [PostsController::class, "hola"]);

Route::get("/posts/create", [PostsController::class, "create"]);

Route::get("/posts/show/{var}", [PostsController::class, "show"]);
