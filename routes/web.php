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

Route::get('/', function () {
    return view('welcome');
});
/* Route::domain('{account}.myapp.com')->group(
    function () {
        Route::get('user/{id}', function ($account, $id) {
            return $account . $id;
        });
    }
); */


Route::resource('trainers', 'TrainerController');
