<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix'=>'location'], function(){
//     Route::get('city', function () {
//         echo "HA NOI";
//     });
//     Route::get('country', function () {
//         echo "BAC TU LIEM";
//     });
//     Route::get('zip', function () {
//         echo "123456789";
//     });
// });
// Route::middleware(['price'])->group(function(){
//     Route::get('item1', function () {
//         echo "Item 1 Price";
//     });
//     Route::get('item2', function () {
//         echo "Item 2 Price";
//     });
// });

// Route::name('location.')->group(function() {
//     Route::get('city', function () {
//         echo "HA NOI";
//     })->name('maincity');
// });
Route::get('/', function() {
    return view('welcome');
});
Route::get('student/add',[StudentController::class,'add']);








