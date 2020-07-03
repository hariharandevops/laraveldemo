<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CreateController extends Controller{
    
    public function index(){
        return view('create');
    }
    public function insert(Request $request){
        
       $create=$request->input('name') ;
       $create1=$request->input('address') ;
       $create2=$request->input('course') ;
       $create3=$request->input('age') ;
       $create4=DB::table('good')
               ->insert(['name'=>$create,'address'=>$create1,'course'=>$create2,'age'=>$create3]);
               return view['create'];
    }
}