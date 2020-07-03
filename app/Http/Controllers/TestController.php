<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller{
    
  public function index(){
     return view('servercake');
  }
  public function postmethod(Request $request){
     return view('servercake');
  }
  public function home(){
      $div=("");
      
  }
  
}


