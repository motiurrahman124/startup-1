<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function signup()
    {
        return view('authentication.signup');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);

        $data = ([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        User::create($data);
        Alert::success('Success', 'You have successfully created a new account');
        return redirect()->route('login');
    }
    public function login()
    {
        return view('authentication.login');
    }
    public function loginCheck(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            if(Auth::user()->is_admin==false)
            {
                Alert::success('Success', 'You have successfully logged in');
                return redirect()->route('home');
            }
            else if(Auth::user()->is_admin==true)
            {
                Alert::success('Success', 'You have successfully logged in');
                return redirect()->route('admin');
            }
  
        }
        Alert::error('Email or password you have enterd is incorrect');
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        Alert::success('You have Successfully Logged Out');

        return redirect()->route('login');
    }
}
