<?php
use App\Http\Controllers\Homecontroller;
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

Route::get('/', [Homecontroller::class, 'index']);
   
Route::get('/index.html', [Homecontroller::class, 'index']);

Route::get('/calender.html', [Homecontroller::class, 'calender']);

Route::get('/all-professor.html', [Homecontroller:: class, 'alldoctor']);

Route::get('/add-professor.html', [Homecontroller:: class, 'adddoctor']);

Route::get('/edit-professor.html', [Homecontroller:: class, 'editdoctor']);

Route::get('/all-students.html', [Homecontroller:: class, 'allpasien']);

Route::get('/add-student.html', [Homecontroller:: class, 'addpasien']);

Route::get('/edit-student.html', [Homecontroller:: class, 'editpasien']);

Route::get('/add-course.html', [Homecontroller:: class, 'addevent']);

Route::get('/all-courses.html', [Homecontroller:: class, 'allevent']);

Route::get('/edit-course.html', [Homecontroller:: class, 'editevent']);

Route::get('/library-assets.html', [Homecontroller:: class, 'artikelassets']);

Route::get('/add-library-assets.html', [Homecontroller:: class, 'addartikel']);

Route::get('/edit-library-assets.html', [Homecontroller:: class, 'editartikel']);

Route::get('/login.html', [Homecontroller:: class, 'login']);

Route::get('/register.html', [Homecontroller:: class, 'register']);

Route::get('/static-table.html', [Homecontroller:: class, 'statictabel']);

Route::get('/data-table.html', [Homecontroller:: class, 'data']);