<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Oldusers;

class LoginController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('pages.form.login');
    }

    // login validation
    public function loginValidator(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'password' => 'required'
            ],
            [
                'email.required' => 'Please enter valid email',
            ]
        );

        $user = Oldusers::where('email', $request->email)->where('password', $request->password)->first();
        $teacher = Teacher::where('email', $request->email)->where('password', $request->password)->first();

        if ($user && $user->role == 'Admin') {
            $request->session()->put('user', [$user->name, $user->role]);
            return redirect()->route('admin-dashboard');
        } elseif ($user) {
            $request->session()->put('user', [$user->name, $user->role]);
            return redirect()->route('users');
        } elseif ($teacher && $teacher->role == 'Teacher') {
            $request->session()->put('user', [$teacher->name, $teacher->role]);
            return redirect()->route('teachers');
        }
        return back();
    }

    public function logout()
    {
        session()->forget('user');
        session()->forget('teacher');
        return redirect()->route('login');
    }

    public function noPermission()
    {
        return view('nopermission');
    }
}
