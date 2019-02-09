<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TpageController extends Controller
{
    public function index() 
    {
    	$caption = 'Get outta here kid';

    	if (Auth::check()) {
    		$caption = 'Get outta here ' . Auth::user()->name;
    	}

    	return view('tpage.index', ['caption' => $caption]);
    }
}
