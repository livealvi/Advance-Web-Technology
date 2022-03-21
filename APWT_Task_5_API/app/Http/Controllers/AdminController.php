<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oldusers;
use App\Models\Teacher;

class AdminController extends Controller
{
    public function getAllUser()
    {

        $users = Oldusers::all();
        $teachers = Teacher::all();

        return view('pages.admin.admin-dashboard')->with('users', $users)->with('teachers', $teachers);
    }
}
