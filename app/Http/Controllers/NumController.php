<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NumController extends Controller{
    
    public function ajax(){
        $get_data=DB::table('good')
                         ->get(); 
                         //return view('post');
        return view('post1',['data' => $get_data]);
    }
    
    public function insertss(Request $request){
        $data= $request->input('name');
         $data1= $request->input('address');
          $data2= $request->input('course');
          $data3= $request->input('age');
          $view=DB::table('good')
                ->insert(['name'=>$data,'course'=>$data2,'age'=>$data3]);
            if($data){
               $get_data=DB::table('good')
                         ->get(); 
               return response()->json(["result"=>"success",'data'=>$get_data]); 
            }
            else{
               return response()-> json(["result"=>"error"]);
            } 
    }
    
    public function updateajax(){
         $ajax=DB::table('good')
               ->where('id','=',7)
               ->update(['name'=>"Deviss",'course'=>"MBA",'Address'=>"pudukkottai",'age'=>"23"]);
         
            if($ajax == 1){
              $true=DB::table('good')
                         ->get(); 
               return response()->json(["result"=>"success",'upp'=>$true]); 
            }
            else{
               return response()-> json(["result"=>"error"]);
            } 
    }
    
    
      public function click(Request $request,$id){ 
        $datas= DB::table('good')
                    ->where('id', '=', $id)
                    ->get();
        return view('/post2',['table'=>$datas]);
    }

         
          }
