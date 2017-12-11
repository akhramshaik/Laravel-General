<?php

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

Route::get('/datatable', function () {
    return view('data');
});


Route::get('just_buttons','DataTablefet@just_buttons');



Route::get('get_data','DataTablefet@get_data');
Route::get('get_data_pag','DataTablefet@get_data_pag');

