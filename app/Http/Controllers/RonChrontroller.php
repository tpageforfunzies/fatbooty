<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RonChrontroller extends Controller
{
    public function index() 
    {
    	return view('rchron.index', ['caption' => 'Get outta here kid']);
    }
}
