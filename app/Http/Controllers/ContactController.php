<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Mail\ContactResponse;


class ContactController extends Controller
{
    //
    public function send(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',    
            
        ]);

                // Send email to your email
        Mail::to('info@infinitysbs.co.za')->send(new ContactMessage($request->all()));

        // Send email to the client
        Mail::to($request->email)->send(new ContactResponse($request->all()));


        return redirect()->back()->with('success', 'Message sent');

    }
}
