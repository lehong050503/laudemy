<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ============================
// ROUTE

// Route::get('/', function () {
//     return view('home');
// })->name('front_home');

// Route::get('/about/arefin/{id}/{name}', function($id,$name) {
//     // return "About page : ".$id;
//     return view('about_page',['id'=>$id, 'name'=>$name]);
// });

// Route::get('/about', function() {
//     // return "About page : ".$id;
//     return view('about_page');
// })->name('front_about');

// ============================
// CONTROLLER

// Route::get('/',[StudentController::class, 'home'])->name('student.home');
// Route::get('/about',[StudentController::class, 'about'])->name('student.about');
// Route::get('/profile/{username}/{age}',[StudentController::class, 'profile'])->name('student.profile');

// ============================
// BLADE

Route::get('/',[StudentController::class,'index'])->name('student.index');





