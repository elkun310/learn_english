<?php

use Illuminate\Support\Facades\Route;
use App\User;
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
// alter table users
// Route::get('alter_user_table', function () {
//     Schema::table('users', function ($table) {
//         $table->string('phone',11)->nullable()->change();
//         $table->integer('level')->nullable()->default('1')->change();
//     });
//     echo "ok";
// });



Route::get('login','backend\LoginController@index');
Route::post('login','backend\LoginController@login');
// ADMIN
Route::group(['prefix' => 'admin','namespace'=>'backend'], function () {
    Route::get('/','IndexController@index');
    Route::group(['prefix' => 'staff'], function () {
        Route::get('/','StaffController@index')->name('staff.index');
        Route::post('store','StaffController@store')->name('staff.store');
    });
    // Route::resource('staff', 'StaffController');
});
