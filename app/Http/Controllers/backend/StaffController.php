<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DataTables;
use Validator;

class StaffController extends Controller
{
    function index(Request $request){
        // $data['users']  = User::where('role','<>','2')->get();
        // return view('backend.staff.list_staff',$data);
        
        if($request->ajax()){
            $data = User::where('role','<>','2')->get();
            return DataTables::of($data)
                                ->addColumn('fullname',function($data){
                                    return $data->lastname." ".$data->firstname;
                                })
                                ->addColumn('action',function($data){
                                    $button  = '<button type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i>&nbsp;Xem</button>'; 
                                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i>&nbsp;Sửa</button>';
                                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-remove"></i>&nbsp;Xóa</button>';
                                    return $button;
                                })
                                ->rawColumns(['action'])
                                ->make(true);
        }
        return view('backend.staff.list_staff');
    }
    function store(Request $request){
        if($request->ajax()){
            $rules=[
                'firstname' =>  'required',
                'lastname'  =>  'required',
                'email'     =>  'required|email|unique:users,email',
                'phone'     =>  'required|numeric|unique:users,phone',
                'password'  =>  'required|min:6|confirmed'
            ];
            $messages = [
                'firstname.required'    =>  'Tên không được bỏ trống',
                'lastname.required'     =>  'Họ không được bỏ trống',
                'email.required'        =>  'Email không được bỏ trống',
                'email.email'           =>  'Email không đúng định dạng',
                'email.unique'          =>  'Email đã có trong hệ thống. Mời chọn email khác',
                'phone.required'        =>  'Số điện thoại không được bỏ trống',
                'phone.numeric'         =>  'Số điện thoại không đúng định dạng',
                'phone.unique'          =>  'Số điện thoại đã có trong hệ thống. Mời chọn số điện thoại khác',
                'password.unique'       =>  'Mật khẩu không được bỏ trống',
                'password.min'          =>  'Mật khẩu tối thiểu 6 kí tự',
                'password.confirmed'    =>  'Mật khẩu nhập lại không khớp'
            ];
            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return response()->json([
                    'error' => $validator->errors()->all()
                ]);
            }else{
                $dataForm = array(
                    'firstname'     =>  $request->firstname,
                    'lastname'      =>  $request->lastname,
                    'email'         =>  $request->email,
                    'phone'         =>  $request->phone,
                    'password'      =>  bcrypt($request->password),
                    'role'          =>  $request->role,
                );
                if(User::insert($dataForm)){
                    return response()->json(
                        [
                            'success' => 'Thêm thành công'
                        ]
                    );
                }
            }

        }
    }
}
