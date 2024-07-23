<?php

use Illuminate\Support\Facades\Route;

// Router führt zu den verschiedenen Seiten, die sich im View Ordner befinden
Route::get('/', function () {
    return view('welcome'); // main page
});

Route::get('/mpl', function () {
    return view('mpl'); // test page
});
