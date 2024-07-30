<?php

use App\Http\Controllers\Backoffice\EventController as BackofficeEventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ModelController;

Route::get('/', [EventsController::class, 'index']);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//index public
Route::get('/events', [EventsController::class, 'index']);

//muestra Evento
Route::get('/events/{id}', [EventsController::class, 'showEvents'])
->name('web.events.showEvents');

//index listado backoffice
Route::get('/backoffice/events',[BackofficeEventController::class,'index'])->middleware('auth');

//form de creacion
Route::get('/backoffice/events/create',[BackofficeEventController::class,'create'])->middleware('auth');

//metodo que crea
Route::post('/backoffice/events',[BackofficeEventController::class,'store'])->middleware('auth');

//form de edición
Route::get('/backoffice/events/{id}/edit',[BackofficeEventController::class,'edit'])->middleware('auth');

//metodo que elimina
Route::delete('/backoffice/events/{id}', [BackofficeEventController::class, 'destroy'])->name('backoffice.destroy');


//metodo que edita
Route::post('/backoffice/events/{id}',[BackofficeEventController::class,'update'])->middleware('auth');

//filtro eventos
Route::get('/types/{id}', [EventsController::class, 'type']);
Route::get('/backoffice/types/{id}', [BackofficeEventController::class, 'type']);


//carrito
Route::get('/backoffice/events/add/{id}', [EventsController::class, 'add'])->middleware('auth');
Route::get('/backoffice/events/remove/{id}', [EventsController::class, 'remove'])->middleware('auth');
Route::get('/cart', [EventsController::class, 'showCart'])->name('web.cart.show')->middleware('auth');
Route::post('/events/clear', [EventsController::class, 'clearCart'])->name('web.cart.clear')->middleware('auth');
Route::post('/events/buy', [EventsController::class, 'buyCart'])->name('web.cart.buy')->middleware('auth');







