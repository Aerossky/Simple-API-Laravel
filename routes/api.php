<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/posts', function(){
    dd('posts');
});

Route::resource('/recipes', RecipeController::class);
