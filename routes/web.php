<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/proyecto', [HomeController::class, 'project'])->name('project');
Route::get('/historia', [HomeController::class, 'story'])->name('story');
Route::get('/musica', [HomeController::class, 'music'])->name('music');
Route::get('/integrantes', [HomeController::class, 'members'])->name('members');
Route::get('/galerias/{section?}', [HomeController::class, 'galleries'])->name('galleries');
Route::get('/creditos', [HomeController::class, 'credits'])->name('credits');
Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');
