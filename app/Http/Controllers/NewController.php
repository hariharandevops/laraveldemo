<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller{

    public function index(){
        return view('servercake');
    }
    
    public function insert(Request $request){
        $name=$request->input('ename');
        $intsert_tb=DB::table('uniq')
                    ->insert(['name' => $name]);
                    
        if(isset($intsert_tb)){
            return view("dp");
        }            
    }
    
}

