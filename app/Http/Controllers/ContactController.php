<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'subject' => 'required|max:120',
                'phone' => 'required|digits:10'
            ]
        );

        if($validated)
        {
            session()->flash('success', 'Thank you for contacting me. I will get in touch with you as soon as possible!');
            return redirect('/');
        } else {
            return redirect('/');
        }        
    }    
}
