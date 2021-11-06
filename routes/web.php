<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/events.html', function () {
    return view('calender');
});

Route::get('/all-professors.html', function () {
    return view('doctor.alldoctor');
});

Route::get('/add-professor.html', function () {
    return view('doctor.adddoctor');
});

Route::get('/edit-professor.html', function () {
    return view('doctor.editdoctor');
});

Route::get('/all-students.html', function () {
    return view('pasien.allpasien');
});

Route::get('/add-student.html', function () {
    return view('pasien.addpasien');
});

Route::get('/edit-student.html', function () {
    return view('pasien.editpasien');
});

Route::get('/add-course.html', function () {
    return view('event.addevent');
});

Route::get('/all-courses.html', function () {
    return view('event.allevent');
});

Route::get('/edit-course.html', function () {
    return view('event.editevent');
});

Route::get('/library-assets.html', function () {
    return view('artikel.artikelassets');
});

Route::get('/add-library-assets.html', function () {
    return view('artikel.addartikel');
});

Route::get('/edit-library-assets.html', function () {
    return view('artikel.editartikel');
});

Route::get('/login.html', function () {
    return view('page.login');
});

Route::get('/register.html', function () {
    return view('page.register');
});