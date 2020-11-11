<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class Logincontroller extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
    	return view('backend.auth.login');
    }

    public function login(request $request)
    {
    
        $credentials = $request->only('userName', 'password');
      
        if ($this->guard()->attempt($credentials)) {
            if (Auth::guard('admin')->user()->status == false) {
                $this->guard()->logout();
                return redirect('admin/login')->with('error', 'Your Account is inactive. Please contact with system administrator.');
            }
        	
            return redirect('admin/dashboard')->with('success', 'Login Successfully');
        }else{
            return redirect('admin/login')->with('error', 'User name or Password doesnot exist!!!');
        }
    }

    public function logout()
    {
    	$this->guard()->logout();
    	return redirect('admin/login')->with('success', 'Logout Successfully');
    }

    public function guard()
    {
    	return Auth::guard('admin');
    }
}
