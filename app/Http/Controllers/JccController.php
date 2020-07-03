<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailable;


class JccController extends Controller{
    public function index(){
        return view('Team',['dt' => "Hariharan"]);
    }

 /* public function postmethod(Request $request)
    {
        
        //dd("Order Mail Sended");      
        
        return view('Team',['dt' => "Hariharan"]); 
       
    }*/
    
    public function postmethod2(Request $request){
        $tenant_email=$request->input('email');
        Mail::send('Team', ["dt" => "dt"] , function($message) {
              $message->to('perachi@myagilevps.com');
              $message->subject('Mail Sended');
        });
        
        return redirect('/com/pr');
    }
}
 


    