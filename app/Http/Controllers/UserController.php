<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;

class UserController extends Controller
{
    public function getFormulaire()
    {
    	return view('formulaire');
    }

    public function postInfos(ContactRequest $request)
    {
    	Mail::send('emails.contact', $request->all(), function($message) 
		{
			$message->to('monadresse@free.fr')->subject('Contact');
		});

		return view('Confirm');
    }
}
