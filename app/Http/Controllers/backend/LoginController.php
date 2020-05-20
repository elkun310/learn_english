<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function index(){
        return view('backend.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:6'
        ],[
            'email.required'        =>  'Bạn chưa điền email',
            'email.email'           =>  'Email chưa đúng định dạng',
            'password.required'     =>  'Bạn chưa điền mật khẩu',
            'password.min'          =>  'Mật khẩu tối thiểu 6 kí tự'    
        ]);
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('admin');
        }else{
            return redirect('login')->withInput()
                                    ->withErrors(['email'=>'Sai email hoặc mật khẩu']);
        }
        
    }
}
