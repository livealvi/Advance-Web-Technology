<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('pages.form.registration');
    }

    // registration validation
    public function userCreate(Request $request){
        $validateUser = $request->validate([
            'name'=>'required|min:5|max:10',
            'email'=>'required|regex:/\S+@\S+\.\S+/',
            'dob' => 'required',
            'phone'=>'required|regex:/^([0-9\(\)\/\+ \-]*)$/',
            'password'=>'required'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 characters'
        ]
    );

    $users[]= (object)$validateUser;
        
        return view('pages.users.users')->with('users', $users);
    }

    public function users()
    {
        return view('pages.users.users');
    }


}
