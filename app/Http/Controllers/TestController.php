<?php

namespace App\Http\Controllers;

use App\Test as Test;
use App\Test2 as Test2;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function dbtest ($id) {
    	// $test = Test::find($id);
    	// $arrayName = array('data' => $test );
    	// return view('home/test', $arrayName);
    	Auth::logout();
    }

	public function dbtest2 ($id) {
		$test = Test2::find($id);
		$arrayName = array('data' => $test );
		return view('home/test', $arrayName);
	}

}
