<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

route::get('/', [ComicController::class, 'index'])
    ->name('comic.index');

route::get('/comics/create', [ComicController::class, 'create'])
    ->name('comic.create');

route::post('/comics', [ComicController::class, 'store'])
    ->name('comic.store');
route::get('/comics/{id}/edit', [ComicController::class, 'edit'])
    ->name('comic.edit');
route::get('/comics/{id}', [ComicController::class, 'show'])
    ->name('comic.show');
route::put('/comics/{id}', [ComicController::class, 'update'])
    ->name('comic.update');
route::delete('/comics/{id}', [ComicController::class, 'destroy'])
    ->name('comic.destroy');
