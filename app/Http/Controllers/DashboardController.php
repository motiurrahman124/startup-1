<?php

namespace App\Http\Controllers;
use App\Models\Appointment;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.layouts.index');
    }

    public function appointment(){
        $appointment = Appointment::orderBy('id','desc')->get();
        return view('admin.layouts.appointment.index',['appointments'=>$appointment]);
    }
}
