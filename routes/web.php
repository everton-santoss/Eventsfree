<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::Post('/events', [EventController::class, 'store']);
Route::get('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');



// Rota de Deletar
Route::delete('events/{id}', [EventController::class, 'destroy']);



// Route::get('/contato', function () {
//     return view('contact');
// });

// Route::get('/produtos', function () {

//     $busca = request('search');

//     return view('products', ['busca' => $busca]);
// });

// Route::get('/produtos_teste/{id?}', function ($id = null) {
//     return view('product', ['id' => $id]);
// });
