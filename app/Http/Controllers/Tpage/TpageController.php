<?php

namespace App\Http\Controllers\Tpage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
