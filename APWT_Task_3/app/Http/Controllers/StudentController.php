<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function students(){

        $student = Student::all();

        return view('pages.users.users')->with('users', $student);
    }
}
