<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

route::get('/', [ComicController::class, 'index'])
    ->name('comic.index');

// Route::get('/', function () {

//     return view('pages.index');
// });
