<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;

/**
 * Route::get      | Consultar
 * Route::post     | Guardar
 * Route::delete   | Eliminar
 * Route::put      | Actualizar
 */


Route::controller(PageController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('blog/{post:slug}','post')->name('post');
    Route::get('crud.blog', 'blog')->name('blog');
});

Route::redirect('dashboard', 'posts')->name('dashboard');

Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except(['show']);

Route::controller(ProjectController::class)->group(function(){
    Route::get('projects','getAllProjects')->name('projects');
    Route::get('insert','insertProject')->name('insert');
    Route::get('update','updateProject')->name('update');
});


require __DIR__.'/auth.php';
