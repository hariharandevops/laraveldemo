<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TableController extends Controller{
    public function request(){
        return view('dp');
}

    public function postmethod(Request $request){
   
    $demo1=$request->input('user');
    $demo2=$request->input('course');
    $demo3=$request->input('age');
    
    $red = DB::table('table')
          ->insert(['user'=>$demo1,'course'=>$demo2,'age'=>$demo3]);
    return redirect('/insrts');
 }
 
  public function select(){
        $green = DB::table('table')
        ->select('*')
        ->get();
  return view('server',['grn'=>$green]);
  }
  public function update(){
       $green=DB::table('table')
             ->where('id','=','10')
             ->update(['user'=>"banu",'course'=>"BCA",'age'=>"25"]);
             return redirect('/insrts');
   }
   public function delete(){
       $apple=DB::table('table')
             ->where('id','=','16')
             ->delete();
             return redirect('/insrts');
        }
        public function optionup(Request $request,$id){
                $name=$request->input('user');
                $course=$request->input('course');
                $age=$request->input('age');
                $data=DB::table('table')
                        ->where('id','=','2')
                        ->update(['user'=>$name,'course'=>$course,'age'=>$age]);
                return redirect('/insrts');
            
            }
}

