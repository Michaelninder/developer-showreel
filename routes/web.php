<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'lander'])->name('pages.lander');
Route::get('/test', [PageController::class, 'lander'])->name('test');