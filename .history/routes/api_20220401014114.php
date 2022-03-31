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


Route::get('/come', [Tui2Controller::class, 'index4'])->name('tui2.index4');
Route::get('/come', [Tui2Controller::class, 'index5']);


Route::post('/tui2/create2', [Tui2Controller::class, 'create2']);




Route::get('/reply/like/{id}', [RepliesController::class, 'like'])->name('reply.like');
Route::get('/reply/unlike/{id}', [RepliesController::class, 'unlike'])->name('reply.unlike');



Route::get('/reply/unlike/{id}', [RepliesController::class, 'unlike'])->name('reply.unlike');


Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});