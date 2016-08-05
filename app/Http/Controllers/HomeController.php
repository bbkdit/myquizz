<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\requestfrqz;

use DB;
use Hash;

class HomeController extends Controller
{
    public function index(){

    	return view('welcome');
    }

     public function signup(){
         
    	return view('login');
}
 public function register(){
         
    	return view('register');
}
 public function formsubmit(requestfrqz $request){
 	
         $username= $request->username;
         $email= $request->email;
         $password= $request->password;
         $remember_token= $request->_token;
         $date= date('Y-m=d H:i:s');

         $data= array("username" => $username,
          "useremail" => $email,
          "userpassword" => Hash::make($password),
          "remember_token" => $remember_token,
          "created_at"=> $date,
          "updated_at"=> $date,
          );

         //$id_email=DB::table('userlogin')->select('email')->where('email',$email)->get();
         //if(count($id_email)==0){

        if( DB::table('userlogin')->insert($data)){
        	return redirect('login')->with("sucess","Sucessfully sign");
        }
        else{
            return redirect('register')->with("error","try again");
        }
    
         }
        // else{
         //	return redirect('register')->with("error","Email is allreardy exist!!");
        // }

        // }
}
