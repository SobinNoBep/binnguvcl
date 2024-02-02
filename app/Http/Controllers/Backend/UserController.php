<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function __construct(){

        
    }

    public function index(){
      $template ='backend.user.index';
      return view ('backend.user.index',compact(
        'template'
      ));
    
       
    }
    public function login(Request $request){
      $credentails=[
        'email'=>$request->input('email'),
        'password'=> $request->input('password')
      ];
      if(Auth::attempt($credentails)){
    return redirect()->route('home');
      }
    }
  
}
