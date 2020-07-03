<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller{
    
    public function postme(Request $request){
        $red="45";
        $wood =DB::table('txtoption')->insert(['age'=>$red]);
        return view('cd');  
    }
    
    public function index1(){
        $a=DB::table('gift')
          ->select('*')
          ->get();
        return view('cd1',['a' => $a]);  
    }
    
    public function delete(){
        $b = DB::table('gift')
                ->where('welcome','=','pre')
                ->delete();
        return redirect('kk/ggf/ff');
   }
     
   
   public function update(){
        $c = DB::table('gift')
               ->where('id','=', '5')
               ->update(['welcome' => "88"]);
        return redirect('/text/eve/ts/y');
   }

    
    public function postmethod(Request $request)
    {
        $red=$request->input('ename');
        $wood =DB::table('txtoption')->insert(['age'=>$red]);
        return view('cd');
    }
    public function index(Request $request){
        $red="34";
        $wood =DB::table('txtoption')->insert(['age'=>$red]);
        return view('cd');  
    }
}

 

