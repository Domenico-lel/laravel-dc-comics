<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

route::get('/', [ComicController::class, 'index'])
    ->name('comic.index');

route::get('/comics/create', [ComicController::class, 'create'])
    ->name('comic.create');

route::get('/comics/{id}', [ComicController::class, 'show'])
    ->name('comic.show');
