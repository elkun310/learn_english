<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DataTables;

class StaffController extends Controller
{
    function index(Request $request){
        // $data['users']  = User::where('role','<>','2')->get();
        // return view('backend.staff.list_staff',$data);
        if($request->ajax()){
            $data = User::where('role','<>','2')->get();
            return DataTables::of($data)
                                ->addColumn('action',function($data){
                                    $button='<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                                    return $button;
                                })
                                ->rawColumns(['action'])
                                ->make(true);
        }
        return view('backend.staff.list_staff');
    }
}
