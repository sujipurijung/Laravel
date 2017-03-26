<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Cookie;

class CalController extends Controller
{
    public function index(Request $request){
    	//session()->put('bin',$request->input('bin'));
        //Cookie::queue(cookie('bin',$request->input('bin'),3600));
    	return view('showcalculator');

    }
    
    public function calculate(Request $request){
    	$bin = (int)$request->input('bin');
    	Cookie::queue(cookie('bin',$bin,3600));
    	session()->put('bin', $bin);
    	for($count = 0, $i = 0 ; $i < strlen($bin) ; $i++){
            $count += ($bin%10) * pow(2, $i);
            $bin=$bin/10;
        } 
        session()->put('count',$count);
        //session()->put('bin', $bin);
        Cookie::queue(cookie('cookie_dec',$count,3600));
        // echo session('count');
        // echo Cookie::get('cookie_dec');

        return redirect('showcalculate');
    }
}
