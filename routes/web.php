<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller('PostController')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/creatos', [PostController::class, 'create'])->name('posts.create');
    Route::get('/edit/{posts}', [PostController::class, 'edit'])->name('posts.edit');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::post('/update/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');
});
// Route::controller(PostController::class)->group(function() {
//     Route::get('/','index');
//     Route::get('/edit/{posts}','edit');
//     Route::get('/create','create');
//     Route::post('/update/{post}','update');
//     Route::post('/store','store');
//     Route::get('/delete/{post}','delete');
// });
