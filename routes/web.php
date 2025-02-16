<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',function(){
    return Inertia::render('Home');
});

Route::get('/about',function(){
    return Inertia::render('About');
})->name('about');