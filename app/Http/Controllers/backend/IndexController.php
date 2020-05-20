<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
class IndexController extends Controller
{
    function index(){
        return view('backend.index');
    }
    function LogOut(){
        Auth::logout();
        return redirect('login');
    }
}
