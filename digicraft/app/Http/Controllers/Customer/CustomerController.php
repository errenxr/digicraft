<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller{
    function tampilDashboardCust(){
        return view('dashboardcust');
    }

    
    function tampilAkunCustomer(){
        $customer = Auth::user();
        return view('akuncustomer', compact('customer'));
    }

    function HelpCenter(){
        return view('helpcenter');
    }

    function MulaiDigicraft(){
        return view('mulaidigicraft');
    }

    function CaraMemesan(){
        return view('caramemesan');
    }
}