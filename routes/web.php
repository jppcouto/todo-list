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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'Main@home')->name('home');

Route::get('/new_task', 'Main@new_task')->name('new_task');
Route::post('/new_task_submit', 'Main@new_task_submit')->name('new_task_submit');

Route::get('task_done/{id}', 'Main@task_done')->name('task_done');
