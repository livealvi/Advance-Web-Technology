<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Teacher;

class CourseController extends Controller
{

    public function courseTeacher(){
        $course = Course::where('id', 1)->first();
        return $course->assignedTeacher();
    }
}
