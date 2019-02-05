<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TpageController extends Controller
{
    public function index() 
    {
    	return view('tpage.index', ['caption' => 'Get outta here kid']);
    }
}
