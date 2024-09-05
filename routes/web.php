<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('home');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/sobre', function (){
    return view('about');
});
