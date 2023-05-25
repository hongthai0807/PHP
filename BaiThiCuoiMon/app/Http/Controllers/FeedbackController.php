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
        $data=$request->input('usrname');
        $data3=$request->input('password');
        
       $data4=DB::select('select ID from admin where  username=? and    password=? and usr_Type=?',[$data,$data3,'usr']);
       $data5=DB::select('select ID from admin where  username=? and    password=? and usr_Type=?',[$data,$data3,'adm']);
      
        if($data4){
            $request->session()->put('usrname',$data);
            $request->session()->put('password',$data3);
           return redirect('student');
           
        }else if($data5){
            $request->session()->put('Home',$data);
            $request->session()->put('class',$data3);
            return redirect('admin');
        }else{
            return redirect('login');
        }
       


    }
   
    public function teacher(){
        return view('teacher1');
    }
    public function student(){
        
       return view('student1');
    }     
    public function History(){
        $query=DB::table("sinhvien");
        $query=$query->select('*');
        $data=$query->paginate(1);
        return view('History',$data);
    }

}
?>
