<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    function tampilAdminDashboard(){
        return view('admindashboard');
    }

    function tampilAkunAdmin(){
        $admin = Auth::user();
        return view('akunadmin', compact('admin'));
    }

}