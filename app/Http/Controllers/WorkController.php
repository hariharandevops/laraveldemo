<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller{
    public function team(){
        return view('eye');
    }
    public function index(Request $request){
        $text=$request->input('user');
        $text1=$request->input('course');
        $text2=$request->input('age');
        
        $notes=DB::table('txtoption')
             ->insert(['user'=> $text, 'course'=>$text1, 'age'=>$text2]);
       return redirect('/go');
    }
    

public function select(){
        $note1=DB::table('txtoption')
              ->select('*')
              ->get();
        return view('result', ['note' => $note1]);
        
    }
    public function delete($id){
        $note3 = DB::table('good')
                  ->where('id','=',$id)
                  ->delete();
        return view('post2',['datas',$note3]);
    }
    public function update(Request $request,$id){
        $note2 = DB::table('good')
                  ->where('id','=',$id)
                  ->get();
        return view('post2',['table',$note2]);
    }
}
