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
    return view('examen');
});

Route::get('/tutores', 'TutoresController@create');
Route::resource('/tutores/create', TutoresController::class)->parameters(['tutores' => 'tutor'])->names(['create' => 'tutores.crear']);