<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tui2Controller;

Route::get('/', [Tui2Controller::class, 'index']);
Route::post('/tui2/create', [Tui2Controller::class, 'create']);
Route::post('/tui2/update', [Tui2Controller::class, 'update']);
Route::post('/tui2/delete', [Tui2Controller::class, 'remove']);
Route::post('/', [Tui2Controller::class, 'post']);

Route::get('/comment', [Tui2Controller::class, 'index2'])->name('tui2.index2');
Route::get('/comment', [Tui2Controller::class, 'index3']);
Route::post('/comment', [Tui2Controller::class, 'post']);


Route::get('/add', [Tui2Controller::class, 'index2'])->name('tui2.index2');

Route::get('/reply/like/{id}', [RepliesController::class, 'like'])->name('reply.like');
Route::get('/reply/unlike/{id}', [RepliesController::class, 'unlike'])->name('reply.unlike');