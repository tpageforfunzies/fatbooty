<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{

	public function __invoke()
	{
		/**
		 * Single Action Controller for /db endpoint
		 * 
		 * @return View
		 */
		$connectionStatus = DB::connection()
					->getPdo()
					->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
		return view('utility.database', ['data' => $connectionStatus]);
	}
}