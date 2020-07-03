<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServercakeController extends Controller{ 
    public function index(){
        return view('servercake');
    }
public function postmethod(Request $request){
    $demo=$request->input('name');
    $demo1=$request->input('user');
    $demo2=$request->input('course');
    
    $red = DB::table('uniq')
          ->insert(['name'=>$demo,'user'=>$demo1,'course'=>$demo2]);
    return redirect('/goodwell');
 }
  
 public function select(){
        $blue=DB::table('uniq') 
             ->select('*')
             ->get();
     return view('server',['text'=>$blue]);
   }
   public function update(){
       $green=DB::table('uniq')
             ->where('id','=','8')
             ->update(['name'=>"salini",'user'=>"speed",'course'=>"BCA"]);
             return redirect('/goodwell');
   }
   public function delete(){
       $apple=DB::table('uniq')
             ->where('id','=','16')
             ->delete();
             return redirect('/goodwell');
        }
}