<?php

use App\Http\Controllers\Backoffice\EventController as BackofficeEventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ModelController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//index public
Route::get('/events', [EventsController::class, 'index']);

//muestra Evento
Route::get('/events/{id}', [EventsController::class, 'showEvents'])->name('web.events.showEvents');

//index listado backoffice
Route::get('/backoffice/events',[BackofficeEventController::class,'index']);

//form de creacion
Route::get('/backoffice/events/create',[BackofficeEventController::class,'create']);

//metodo que crea
Route::post('/backoffice/events',[BackofficeEventController::class,'store']);

//form de edición
Route::get('/backoffice/events/{id}/edit',[BackofficeEventController::class,'edit']);

//metodo que edita
Route::post('/backoffice/events/{id}',[BackofficeEventController::class,'update']);
//concerts

//Route::prefix('events/concerts')->controller(EventsController::class)->name('web.events.')->group(function () {
//    Route::get('/', 'concerts')->name('concerts');
//    Route::get('events/{id}', 'showConcerts')->name('showConcerts');
//});


//disco
//Route::prefix('events/disco')->controller(EventsController::class)->name('web.events.')->group(function () {
//    Route::get('/', 'disco')->name('disco');
//    Route::get('/{id}', 'showDisco')->name('showDisco');
//});

