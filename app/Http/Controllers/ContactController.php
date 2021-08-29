<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
        session()->flash('success', 'Thank you for contacting me. I will get in touch with you as soon as possible!');
        return redirect('/');
    }
}
