<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add()
    {
        $student = new Student();
        $student->student_name = "Le thi hong";
        $student->student_email = "lethihong@gmail.com";
        $student->save();
    }
    //
    // public function index()
    // {
    //     // $data['student_name'] = [
    //     //     'name' => 'Le Thi Hong',
    //     //     'email' => 'lethihong@gmail.com',
    //     //     'phone' => '098856567'
    //     // ];
    //     // foreach($data['student_name'] as $value) {
    //     //     echo $value."_";
    //     // }
    //     // dd($data);
    //     return view('home');
    // }


    
    // public function home() {
    //     // return redirect('home');
    //     return view('home');
    // }
    // public function about()
    // {
    //    return view('about_page');
    // }
    // public function profile($username, $age)
    // {
    //     return view('student.profile',['name'=>$username, 'age'=>$age]);
    // }
}
