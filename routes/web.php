<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ThemeController;

Route::get('/', [PageController::class, 'lander'])->name('pages.lander');
Route::get('/test', [PageController::class, 'lander'])->name('test');

Route::post('/theme-switch', [ThemeController::class, 'switchTheme'])->name('theme.switch');
