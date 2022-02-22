<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oldusers;

class UsersController extends Controller
{
    public function users()
    {

        $users = Oldusers::all();

        return view('pages.users.users')->with('users', $users);
    }
}
