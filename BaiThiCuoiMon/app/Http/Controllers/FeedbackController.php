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
            if(!session('3') and !session('4')){
                return view('login');
            }else{
                return view("admin");
            }
           
            
           }    

//  login           
    Public function checksession(Request $request){
        $data=$request->input('usrname');
        $data3=$request->input('password');
        
       $data4=DB::select('select id from admin where  Username=? and    Password=? and usr_Type=?',[$data,$data3,'usr']);
       $data5=DB::select('select id from admin where  Username=? and    Password=? and usr_Type=?',[$data,$data3,'adm']);
       $data6=DB::select('select id from admin where  Username=? and    Password=? and usr_Type=?',[$data,$data3,'Y']);
       $data4=DB::select('select ID from admin where  username=? and    password=? and usr_Type=?',[$data,$data3,'usr']);
       $data5=DB::select('select ID from admin where  username=? and    password=? and usr_Type=?',[$data,$data3,'adm']);
      
        if($data6){
            $request->session()->put('va',$data);
            $request->session()->put('van',$data3);
            return redirect('teacher');
        }else if($data4){
            $request->session()->put('1',$data);
            $request->session()->put('2',$data3);
            return redirect('student');
        }else if($data5){
            $request->session()->put('3',$data);
            $request->session()->put('4',$data3);
            return redirect('admin');
        }else{
            return redirect('login');
        }


    }
   
    public function feedback(){
   return view('feedback');

    }
    public function student(){
        if(!session('1') and !session('2')){
            return view('login');
        }else{
            return view('student1');
        }
      
    }  
    public function teacher(){
        if(!session('va') and !session('van')){
            return view('login');
        }else{
            return view('teacher1');
        }
    
    }   
    public function History(){
        $query=DB::table("sinhvien");
        $query=$query->select('*');
        $data=$query->paginate(1);
        return view('History',$data);
    }
public function addstudent(){
    $data=DB::table("giaovien")->select('*')->get();
    return view('addstudent',compact('data'));
 
}
public function editstudent(Request $request){
$firstname=$request->input('First_name');
$idstudent=$request->input('ID_student');
$lastname=$request->input('Last_name');
$Email=$request->input('Email');
$tel=$request->input('tel');
$idteacher=$request->input('drop');
DB::insert('insert into sinhvien (Id_student,First_name,Last_name,Email,Id_teacher,tel) values(?,?,?,?,?,?)',[$idstudent,$firstname,$lastname,$Email,$idteacher,$tel]);
return redirect('editstudent');
}
public function crudstudent(){
    $data=DB::table("sinhvien")->select('*')->get();
    return view('crudstudent',compact('data'));
}
}
?>
