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
    	session()->put('bin',$request->input('bin'));
        Cookie::queue(cookie('dec',$request->input('dec'),3600));
    	return view('showcalculator');

    }

    public function calculate_old(){
    	$count=0;
    	for($i=0;$i<strlen(session('bin'));$i++){
            $count=$count+((session('bin')%10)*pow(2, $i));
        } 
        session()->put('count',$count);
        session()->put('i',$i);


    	//$bmi = session('weight')/(Cookie::get('height')*Cookie::get('height'));

    	// $bin=$_GET["bin"]; 
     //    $dec=$_GET["dec"]; 
     //    $count=0; <br>
     //    for($i=0;$i<strlen($bin);$i++){
     //       $count=$count+(($bin%10)*pow(2, $i));
     //    }
         
    	return view("showcalculator");
    }

    public function calculate(Request $request){
    	$bin = (int)$request->input('bin');

    	for($count = 0, $i = 0 ; $i < strlen($bin) ; $i++){
            $count += ($bin%10) * pow(2, $i);
        } 

        session()->put('count',$count);
        session()->put('bin', $bin);

        return redirect('showcalculate');
    }
}
