<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Mailable;

class Array1Controller extends Controller
{
   public function postmethod(Request $request)
    
   { 
 
           $someJSON = '{
           "columns": 
 [{
  "@id1": "http://example.org/events-listing.csv#event-1",
  "@type1": "schema:MusicEvent",
  "schema:name1": "B.B. King",
  "schema:startDate": "2014-04-12T19:30:00",
  "schema:location": {
    "@id2": "http://example.org/events-listing.csv#place-1",
    "@type2": "schema:Place",
    "schema:name2": "Lupo’s Heartbreak Hotel",
    "schema:address": "79 Washington St., Providence, RI"
  },
  "schema:offer1": {
    "@id3": "http://example.org/events-listing.csv#offer-1",
    "@type3": "schema:Offer",
    "schema:offer2": "https://www.etix.com/ticket/1771656"
  }
}, {
  "@id1": "http://example.org/events-listing.csv#event-2",
  "@type1": "schema:MusicEvent",
  "schema:name1": "B.B. King",
  "schema:startDate": "2014-04-13T20:00:00",
  "schema:location": {
    "@id2": "http://example.org/events-listing.csv#place-2",
    "@type2": "schema:Place",
    "schema:name2": "Lynn Auditorium",
    "schema:address": "Lynn, MA, 01901"
  },
  "schema:offer1": {
    "@id3": "http://example.org/events-listing.csv#offer-2",
    "@type3": "schema:Offer",
    "schema:offer2": "http://frontgatetickets.com/venue.php?id=11766"
  }
}]
}';




  $someArray = json_decode($someJSON, true);


  
      return view('user1',["x" => $someArray]);  
        //return response()->json(["someJSON" =>$a]);
       
    }

 public function postmethod2(Request $request){
        $tenant_email=$request->input('email');
        Mail::send('user1', ["dt" => "dt"] , function($message) use ($tenant_email) {
              $message->to($tenant_email);
              $message->subject('Mail Sended');
        });
        
        return redirect('/pr/pr/');
    }
}

        
        
