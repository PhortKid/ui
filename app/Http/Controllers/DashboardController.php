<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

      if(auth()->user() ==null){
        return view('mitm');
    }
   

    if(auth()->user()->is_pwd_change() =="no"){
         return redirect('dash/pwd_change');
    }else{
           return view('dashboard.index');
    }
        
    }

    public function add(){

      if(auth()->user() ==null){
        return view('mitm');
    }

  if(auth()->user()->role == "Admin" || auth()->user()->role == "CR" ){
    return view('dashboard.addmember');
  }else{
    return view('mitm');
  }
       
    }
    public function manage(){
      if(auth()->user() ==null){
        return view('mitm');
    }
    if(auth()->user()->role == "Admin" || auth()->user()->role == "CR" ){
      return view('dashboard.managemember');
    }else{
      return view('mitm');
    }
        
    }


    public function votes(){
      if(auth()->user()->role=="Admin" or auth()->user()->role=="special"){
        $presidents=DB::select('SELECT * FROM `leader` WHERE category="president" ');
        $vice_presidents=DB::select('SELECT * FROM `leader` WHERE category="vice_president" ');
        $project_managers=DB::select('SELECT * FROM `leader` WHERE category="project_manager" ');
        $assistant_project_managers=DB::select('SELECT * FROM `leader` WHERE category="assistant_project_manager" ');
        $secretarys=DB::select('SELECT * FROM `leader` WHERE category="secretary" ');
        $accountants=DB::select('SELECT * FROM `leader` WHERE category="accountant" ');
        $sports=DB::select('SELECT * FROM `leader` WHERE category="sports" ');
        return view('dashboard.votes')->with('presidents',$presidents)->with('vice_presidents',$vice_presidents)->with('project_managers',$project_managers)->with('assistant_project_managers',$assistant_project_managers)->with('secretarys',$secretarys)->with('accountants',$accountants)->with('sports',$sports);
      }else{

        return 404;
      }
    
  
    }

  //  public function addpost(){


   //     return view('dashboard.add_post');
  //  }

    //public function addposts(){

     
      //  return view('dashboard.add_post');
      // }
}
