<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FeedbackController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function login(){

        //code here
        
        return view("login");
        
        }
    
     function admin(){

            //code here
            
         return view("admin");
            
           }    
    public function checkUserType(){
        //code here
        if (!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->userType==='ADM'){
            return redirect()->route('admin');
        }
        if(Auth::user()->userType==='USR'){
            return redirect()->route('user');
        }
    
    }
    Public function checksession(Request $request){
        $data=$request->input();
        $request->session()->put('email',$data['email']);
        
    }
        }
        
?>
