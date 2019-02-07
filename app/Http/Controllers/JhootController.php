<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JhootController extends Controller
{
    public function index() {
        return view('jhoot.home');
    }
}
