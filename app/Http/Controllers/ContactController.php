<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use app\Notifications\FormSubmitted as text;
use Nexmo\Laravel\Facade\Nexmo;

class ContactController extends Controller
{

    public function store(Request $request)
    {
       

        $validated = $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'subject' => 'required|string|max:120',
                'content' => 'required|string|max:500',
                'phone' => 'required|string|digits:10',
                'g-recaptcha-response' => 'required|recaptchav3:sendmessage,0.5'
            ]
        );

        

        if($validated)
        {
            Mail::to('edward@rockymountainweb.design')->send(new FormSubmitted(
                $request->first_name, $request->last_name, $request->email, $request->phone, $request->subject, $request->content
            ));

            Nexmo::message()->send([
                'to' => '19494637402',
                'from' => '18442004459',
                'text' => $request->first_name . ' ' . $request->last_name . ' has sent you a message: ' . $request->subject .': ' . $request->content
            ]);
          
            
            session()->flash('success', 'Thank you for contacting me. I will get in touch with you as soon as possible!');
            return redirect('/');
        } else {
            return redirect('/');
        }   
        
    }    
}
