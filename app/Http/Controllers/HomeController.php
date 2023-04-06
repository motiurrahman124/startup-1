<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('id','desc')->get();
        return view('layouts.home',['blogs'=>$blog]);
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'message' => 'required',
        ],
        [
            "name.required" => "Please input your name"
        ]
    
    );
        
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['service'] = $request->service;
        $data['message'] = $request->message;

        
        Appointment::create($data);
        Alert::success('Success', 'Your appoinment has been successfully submitted!');
        return redirect()->route('home');


    }
   
}
