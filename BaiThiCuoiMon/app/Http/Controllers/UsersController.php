<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use Illuminate\Routing\Controller as BaseController;

use App\Models\users;
use App\Models\usersDAO;

class usersController extends BaseController

{

use AuthorizesRequests, ValidatesRequests;


function info(){

    //code here
    
    $query=DB::table("users")->select('*')->get();
    return view('user',compact('query'));
    
    }   
            
            }
    
    ?>