<?php

namespace App\Http\Controllers\Utility;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DbController extends Controller
{

	public function __invoke()
	{
		/**
		 * Single Action Controller for /db endpoint
		 * 
		 * @return View
		 */

		try {
			$connectionName = 'Connected to: ' . DB::connection()->getname();
		} catch (Exception $e) {
			$connectionName = 'Database name unavailable.  Check connection.';
		}

		return view('utility.database', ['data' => $connectionName]);
	}
}