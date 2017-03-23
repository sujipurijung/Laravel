<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cookie;

class CalController extends Controller
{
    public function index()
	{
		Cookie::get('Pee',500,3600);
		return view("calculator");	
	}
	public function show(Request $request)
	{
		
		return veiw('welcome');
	}
}
