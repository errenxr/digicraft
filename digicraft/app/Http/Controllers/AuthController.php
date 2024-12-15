<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthVerifyRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    function tampilRegistrasi(){
        return view('regiscustomer');
    }

    function submitRegistrasi(Request $request){
        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
       // dd($user);
       return redirect()->route('login');

    }

    function tampilLogin(){
        return view('login');
    }

    function submitLogin(UserAuthVerifyRequest $request): RedirectResponse{
        $data = $request->validated();

        if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'role'=>'admin'])){
            $request->session()->regenerate();
            return redirect()->intended('admindashboard');
        }else if (Auth::guard('customer')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'role'=>'customer'])){
            $request->session()->regenerate();
            return redirect()->intended('dashboardcust');
        }else{
            return redirect(route('login'))->with('msg', 'email dan password salah');
        }
    }

    function logout(): RedirectResponse{
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }else if(Auth::guard('customer')->check()){
            Auth::guard('customer')->logout();
        }
        return redirect(route('login'));
    }

    
}