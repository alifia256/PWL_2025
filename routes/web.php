<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'World';
});

Route::get('/', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return '2341760019 - Siti Alifia Azzahra Mustofa';
});

Route::get('/user/{name?}', function ($name = 'Alifia'){
    return 'Siti Alifia Azzahra Mustofa '.$name;
});

