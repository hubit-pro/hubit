<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin')->except('logout');
    }

    public function dashboard()
    {
    	return view('backend.dashboard.index');
    }
}
