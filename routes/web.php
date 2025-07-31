<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ThemeController;

Route::get('/', [PageController::class, 'lander'])->name('pages.lander');
Route::get('/test', [PageController::class, 'lander'])->name('test');
Route::get('/test2', [PageController::class, 'lander'])->name('test2');
Route::get('/test3', [PageController::class, 'lander'])->name('test3');
Route::get('/test4', [PageController::class, 'lander'])->name('test4');
Route::get('/test5', [PageController::class, 'lander'])->name('test5');
Route::get('/test6', [PageController::class, 'lander'])->name('test6');
Route::get('/test7', [PageController::class, 'lander'])->name('test7');
Route::get('/test8', [PageController::class, 'lander'])->name('test8');
Route::get('/test9', [PageController::class, 'lander'])->name('test9');

Route::post('/theme-switch', [ThemeController::class, 'switchTheme'])->name('theme.switch');

Route::view('/terminal', 'components.terminal');