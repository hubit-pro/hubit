<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class ChangePasswordController extends Controller
{
    private $admin;
    public function __construct(Admin $admin)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->admin = $admin;
    }

    public function update(Request $request, $slug)
    {

        $this->validate($request, [
            'userName' => 'required|min:5|max:20',
            'email' => 'required|email',
            'old_password' => 'required|min:6|max:15',
            'password' => 'required|min:6|max:15',
            'confirm_password' => 'required|same:password'
        ]);
        $password = $request->old_password;
        $userName = $request->userName;
        $email = $request->email;

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {

            $slug = Auth::guard('admin')->user()->slug;
            $admin = $this->admin->where('slug', $slug)->first();
            $admin->password = bcrypt($request->password);
            $admin->userName = $request->userName;
            $admin->save();

            $data['message'] = 'Password Changed Successfully';
            return $data;
        }else{
            $data['error'] = 'Invalid old password';
            return $data;
        }
    }
}
