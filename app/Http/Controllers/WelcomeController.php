<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  
	public function index()
	{
		
		return 'welcome, je ,vous salue';
	}

	public function welcome()
	{
		$name = 'Kientega';
		$prename = 'Francis';
		return view('welcome', compact('name', 'prename') );
	}
}
