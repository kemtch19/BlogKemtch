<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", homecontroller::class);

Route::get("/posts", [PostsController::class, "hola"]);

Route::get("/posts/create", [PostsController::class, "create"]);

Route::get("/posts/show/{var}", [PostsController::class, "show"]);
