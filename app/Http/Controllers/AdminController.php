<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = session()->get('admin_id');
        if($admin_id){
            return redirect::to('admin');

        }else{
            return redirect::to('login')->send();
        }
    }

    public function index()
    {
        $this->AuthLogin();

        return view('admin_layout');
    }

    public function register()
    {
        return view('admin.login.register');
    }

    public function login()
    {
        return view('admin.login.login');
    }

    public function login_post(Request $request)
     {
         
        $admin_email = $request->admin_email;
       $admin_password = md5($request->admin_password);
       $login = Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
       $login_count = $login;
       if($login_count)
       {
        session()->put('admin_name',$login->admin_name);
        session()->put('admin_id',$login->admin_id);
           return Redirect::to('/admin');
       }else{
        session()->flash('message','Mật khẩu or tài khoản sai');

           return Redirect::to('/login');

       }
     
    }

    public function register_post(Request $request)
     {
         $data = $request->all();
         $admin = new Admin();
         $admin->admin_name=$data['admin_name'];
         $admin->admin_phone=$data['admin_phone'];
         $admin->admin_email=$data['admin_email'];
         $admin->admin_password=md5($data['admin_password']);
        $admin->save();
        session()->flash('message','Đăng ký thành công');

        return Redirect::to('register');
     }

     public function logout(Request $request)
    {
        session()->put('admin_name',null);
        session()->put('admin_id',null);
        return Redirect::to('login');

    }

}
