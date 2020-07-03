<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller{
    
    public function index(){
        return view('ajaxreq');
    } 
    
    public function insert(Request $request){
        $txt = $request->input('fname');
        $txts = $request->input('lname');
        $data = DB::table('uniq')
                ->insert(['name'=>$txt, 'user'=>$txts]);
                
        if($data == 1){
           return response()-> json(["result"=>"success",'name' => $data]); 
        }else{
           return response()-> json(["result"=>"error"]);
        }     
                 
    }
    
    public function select(){
        $data = DB::table('uniq')
                ->get();
        echo 'Hello World!';

        // From URL to get webpage contents. 
        $url = "http://babafaridpublicschool.com/"; 
        //$url = "http://www.servercake.in/"; 
        
        // Initialize a CURL session. 
        $ch = curl_init(); 
        
        // Return Page contents. 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        
        //grab URL and pass it to the variable. 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        
        
        $result = curl_exec($ch); 
        
        //echo $result; 
        
        return response()->json(["curl"=>curl_getinfo($ch, CURLINFO_HTTP_CODE),'msg' => curl_error($ch)]);
    }
}