<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\IndexController::class,'mainShow']);

//Book
Route::prefix('/books')->controller(\App\Http\Controllers\BookController::class)->group(function () {
    Route::get('/create', 'viewCreate');
    Route::post('/create', 'createBook');
    Route::get('read/{id}', 'viewUpdate');
    Route::post('read/{id}', 'read');
    Route::get('update/{id}', 'viewUpdate');
    Route::post('update/{id}', 'update');
    Route::get('delete/{id}', 'BookDelete');
    Route::get('/list', 'list');
});
Route::prefix('/reader')->controller(\App\Http\Controllers\ReaderController::class)->group(function () {
    Route::get('/create', 'createView');
    Route::post('/create', 'createReaders');
    Route::get('/list', 'list');
    Route::get('delete/{id}', 'ReaderDelete');
});
Route::prefix('/readJournal')->controller(\App\Http\Controllers\ReaderController::class)->group(function () {
    Route::get('/list', 'JournalView');
    Route::get('/add', 'addToJournalView');
    Route::post('/add', 'addToJournal');
    Route::get('update/{id}', 'viewUpdate');
    Route::post('update/{id}', 'update');

});

Route::prefix('/tag')->controller(\App\Http\Controllers\TagController::class)->group(function () {
    Route::get('/list', 'listTag');
    Route::get('/create', 'createViewTag');
    Route::post('/create', 'createTag');

});
