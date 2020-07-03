<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RedController extends Controller{

  public function postmethod(Request $request)
    {
        
        //dd("Order Mail Sended");      
        
        return view('text',['dt' => "Hariharan"]); 
       
    }
    
    public function postmethod2(Request $request){
        $tenant_email=$request->input('email');
        Mail::send('text', ["dt" => "dt"] , function($message) use ($tenant_email) {
              $message->to($tenant_email);
              $message->subject('Mail Sended');
        });
        
        return redirect('/pp/pp');
    }
}