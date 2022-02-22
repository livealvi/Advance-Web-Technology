<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oldusers;
use PHPUnit\Framework\MockObject\Builder\Stub;

class RegistrationController extends Controller
{

    public function users()
    {
        return view('pages.users.users');
    }

    // user create
    public function registration()
    {
        return view('pages.form.registration');
    }

    // registration validation
    public function userCreate(Request $request)
    {
        $validateUser = $request->validate(
            [
                'name' => 'required|min:5|max:10',
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'dob' => 'required',
                'phone' => 'required|regex:/^([0-9\(\)\/\+ \-]*)$/',
                'password' => 'required'
            ],
            [
                'name.required' => 'Please put your name',
                'name.min' => 'Name must be greater than 5 characters'
            ]
        );

        //$users[]= (object)$validateUser; - for old

        $users = new Oldusers();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->dob = $request->dob;
        $users->phone = $request->phone;
        $users->password = $request->password;
        $users->save();
        $users = Oldusers::all();
        return view('pages.users.users')->with('users', $users);
    }

    //user edit
    //get-single
    public function userEdit(Request $request)
    {
        $user = Oldusers::where('id', $request->id)->first();
        return view('pages.users.user-edit')->with('user', $user);
    }

    //update
    public function userUpdate(Request $request)
    {
        $validateUser = $request->validate(
            [
                'name' => 'required|min:5|max:10',
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'dob' => 'required',
                'phone' => 'required|regex:/^([0-9\(\)\/\+ \-]*)$/',
                'password' => 'required'
            ],
            [
                'name.required' => 'Please put your name',
                'name.min' => 'Name must be greater than 5 characters'
            ]
        );

        $user = Oldusers::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users');
    }

    //delete
    public function userDelete(Request $request)
    {
        $user = Oldusers::where('id', $request->id)->first();
        $user->delete();
        return redirect()->route('users');
    }
}
