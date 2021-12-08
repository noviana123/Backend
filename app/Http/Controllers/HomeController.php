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

    public function adddoctor(){
        return view('doctor.adddoctor');
    }

    public function editdoctor(){
        return view('doctor.editdoctor');
    }

    public function allpasien(){
        return view('pasien.allpasien');
    }

    public function addpasien(){
        return view('pasien.addpasien');
    }

    public function editpasien(){
        return view('pasien.editpasien');
    }

    public function addevent(){
        return view('event.addevent');
    }

    public function allevent(){
        return view('event.allevent');
    }

    public function editevent(){
        return view('event.editevent');
    }

    public function addartikel(){
        return view('artikel.addartikel');
    }

    public function artikelassets(){
        return view('artikel.artikelassets');
    }

    public function editartikel(){
        return view('artikel.editartikel');
    }

    public function login(){
        return view('page.login');
    }

    public function register(){
        return view('page.register');
    }

    public function statictabel(){
        return view('tabel.statictabel');
    }

    public function data(){
        return view('tabel.data');
    }
}
