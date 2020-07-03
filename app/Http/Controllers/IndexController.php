<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller{

    public function example(){
        return view('dp');
    }
    public function index(Request $request){
    $test1=$request->input('name');
    $test2=$request->input('course');
    $test3=$request->input('age');
    $test4=$request->input('address');
    $test5=$request->input('place');
    $eve=DB::table('good')
        ->insert(['name'=>$test1,'course'=>$test2,'age'=>$test3,'address'=>$test4,'place'=>$test5]);
        return redirect('/data');
    }
    public function select(){
    $data=DB::table('good')
         ->select('*')
         ->get();
         return view('dp1',["uniq"=>$data]);
    }
    public function update(){
        $data1=DB::table('good')
        ->where('id','=','5')
        ->update(['name'=>"boomi",'course'=>"Mca",'age'=>"24",'address'=>"annanagar",'place'=>"chennai"]);
        return redirect('/data');
    }
    public function delete(){
        $data1=DB::table('good')
        ->where('id','=','8')
        ->delete();
        return redirect('/data');
    }
}