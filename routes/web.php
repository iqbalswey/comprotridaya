<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',[
        "title" => "/"
    ]);
});

Route::get('/company', function () {
    return view('company', [
        "title" => "/company"
    ]);
});

Route::get('/legality', function () {
    return view('legality', [
        "title" => "/legality"
    ]);
});

Route::get('/projects', function () {
    return view('projects', [
        "title" => "/projects"
    ]);
});

// Route::get('/news', function () {
//     return view('news');
// });


// Route::get('/contacs', function () {
//     return view('contacs');
// });