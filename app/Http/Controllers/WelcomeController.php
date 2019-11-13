<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
	public function index()
	{
		$users = DB::select('call fetch_all_users()');
		
		return view('welcome', compact('users'));
	}
}
