<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tui2Controller;

Route::get('/', [Tui2Controller::class, 'index']);
Route::post('/tui2/create', [Tui2Controller::class, 'create']);
Route::post('/tui2/update', [Tui2Controller::class, 'update']);
Route::post('/tui2/delete', [Tui2Controller::class, 'remove']);
Route::post('/', [Tui2Controller::class, 'post']);


Route::get('/tui2/comment', [Tui2Controller::class, 'link']);
Route::resource('articles', 'App\Http\Controllers\Tui2Controller');

Route::get('/reply/like', [RepliesController::class, 'like']);
Route::get('/reply/unlike', [RepliesController::class, 'unlike']);
