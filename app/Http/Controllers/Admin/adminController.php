<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class adminController extends Controller
{
    public function dashboard()
    {
        $admin = Auth::guard('admin')->user();
        return view('Admin.dashboard',compact('admin'));
    }
}
