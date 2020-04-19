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

Route::get('/', function () {
    return view('welcome');
});
// alter table users
Route::get('alter_user_table', function () {
    Schema::table('users', function ($table) {
        $table->string('phone',11)->nullable()->change();
        $table->integer('level')->nullable()->default('1')->change();
    });
    echo "ok";
});

// Route::get('add_user', function () {
//     $user = new User;
//     $user->firstname = "elkun";
//     $user->lastname = "nguyen";
//     $user->email = "elkun310@gmail.com";
//     $user->password = bcrypt('123456');
//     $user->phone = "0389938822";
//     $user->level = "1";
//     $user->role = "1";
//     $user->save();
// });