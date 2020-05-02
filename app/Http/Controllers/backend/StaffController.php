<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class StaffController extends Controller
{
    function index(){
        $data['users']  = User::where('role','<>','2')->get();
        return view('backend.staff.list_staff',$data);
    }
}
