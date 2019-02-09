<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JhootController extends Controller
{
    public function index() {
        return view('jhoot.home');
    }

    public function status() {
        $statuses = array();
        $sites = array('movinglocal.org', 'soflotechjobs.com', 'jeffreyhooton.com', 'keepmeprime.com', 'journeypure.com', 'johnrphoto.com');
        
        foreach ($sites as $site) {
            if(fsockopen($site, 80, $errno, $errstr, 30)) {
                array_push($statuses, 'up');
            } else {
                array_push($statuses, 'down');
            }
        }

        return view('jhoot.status', ['sites'=> $sites, 'statuses' => $statuses]);
    }
}
