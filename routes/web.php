<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

Route::get('/', [ItemController::class, 'index'])->name('root');

Route::prefix('/auth')->group(function () {
    Route::get('/login', [AuthController::class, 'check'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'checkUser'])->name('post.login');
    Route::get('/logout', [AuthController::class, 'getLogout']);
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/thanks', [AuthController::class, 'thanks'])->name('thanks');
    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

require __DIR__.'/auth.php';
