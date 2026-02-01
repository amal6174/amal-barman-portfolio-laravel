<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function loginForm(){
        return view('admin.login');
    }


    public function login(Request $request){
        $admin= Admin::where('email',$request->email)->first();

        if($admin && Hash::check($request->password, $admin->password)){

          Session::put('admin_id',$admin->id);

          return redirect('/admin/dashboard');
        }
          
        return back()->with('error','Ivalid credentials');

    }


    public function logout(){
        Session::forget('admin_id');
        return redirect('/admin/login');
    }

  
}
