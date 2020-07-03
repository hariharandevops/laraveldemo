<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Mailable;

class ArrayController extends Controller
{
   public function postmethod(Request $request)
 {
   
 $someJSON = '{
  "squadName": "Super hero squad",
  "homeTown": "Metro City",
  "formed": 2016,
  "secretBase": "Super tower",
  "active": true,
  "members": [
    {
      "name": "Molecule Man",
      "age": 29,
      "secretIdentity": "Dan Jukes",
      "powers": [
        "Radiation resistance",
        "Turning tiny",
        "Radiation blast"
      ]
    },
    {
      "name": "Madame Uppercut",
      "age": 39,
      "secretIdentity": "Jane Wilson",
      "powers": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    },
    {
      "name": "Eternal Flame",
      "age": 1000000,
      "secretIdentity": "Unknown",
      "powers": [
        "Immortality",
        "Heat Immunity",
        "Inferno",
        "Teleportation",
        "Interdimensional travel"
      ]
    }
  ]
}';
  $someArray = json_decode($someJSON, true);


  
      return view('user',["x" => $someArray]);  
        //return response()->json(["someJSON" =>$a]);
       
    }

 public function postmethod2(Request $request){
        $tenant_email=$request->input('email');
        Mail::send('user', ["dt" => "dt"] , function($message) use ($tenant_email) {
              $message->to($tenant_email);
              $message->subject('Mail Sended');
        });
        
        return redirect('/ur/dd/');
    }
}

        
        
