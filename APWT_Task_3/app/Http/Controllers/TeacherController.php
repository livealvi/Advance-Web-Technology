<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Models\Course;

class TeacherController extends Controller
{
    public function teachers(){

        $teachers = Teacher::all();

        return view('pages.teachers.teachers')->with('teachers', $teachers);
    }

    public function teacherCourses(Request $request){
        $teacher = Teacher::where('id', $request->id)->first();
        $allData = $teacher->assignedCourses();
        return view('pages.courses.course-by-teacher')->with('allData', $allData)->with("teacher", $teacher);
    }
}
