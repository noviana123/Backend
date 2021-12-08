<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function calender(){
        return view('calender');
    }

    public function alldoctor(){
        return view('doctor.alldoctor');
    }
}
