<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller{
    public function index(){
        return view('cd');
    }
    public function table(Request $request){
        return view('cd');
    }
}