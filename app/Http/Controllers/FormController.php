<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function getInfos()
    {
    	return wiew('infos');
    }


    public function postInfos(Request $request)
	{
		return 'Le nom est ' . $request->input('nom'); 
	}

}
