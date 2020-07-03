<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{
    public function click(){
        //$a=22;
       // $b=44;
       // $c=$a+$b;
        return view('home');
    }
    
public function postmethod(Request $request){
    return view('home');
    
    }   
}