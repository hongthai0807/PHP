<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
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
       
       
        
        return redirect('admin')->with('message','login detail are not valid');
    }
   
    public function feedback(){
        return view('feedback');
    }
    public function student(){
        
       
    }     
    public function History(){
        $query=DB::table("sinhvien");
        $query=$query->select('*');
        $data=$query->paginate(3);
        return view('History',$data);
    }

}
?>
