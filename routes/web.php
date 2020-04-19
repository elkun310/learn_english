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
// Route::get('add_user', function () {
//     $user = new User;
//     $user->firstname = "elkun";
//     $user->lastname = "nguyen";
//     $user->email = "elkun310@gmail.com";
//     $user->password = bcrypt('123456');
//     $user->phone = "0389938822";
//     $user->role = "1";
//     $user->save();
// });