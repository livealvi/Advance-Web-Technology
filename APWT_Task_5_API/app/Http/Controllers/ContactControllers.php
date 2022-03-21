<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControllers extends Controller
{
    //contact_us validation
    public function contactUs(Request $request){
        $validateMessage = $request->validate([
            'name'=>'required|min:5|max:10',
            'email'=>'required|regex:/\S+@\S+\.\S+/',
            'subject' => 'required',
            'message' => 'required',
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 characters',
        ]
    );

    $messages[]= (object)$validateMessage;
        
        return view('pages.message.message')->with('messages', $messages);
    }
}
