<?php

namespace App\Http\Controllers;
use App\Models\Leader;
use Illuminate\Http\Request;
use DB;

class leadersController extends Controller
{   public function index(){
    
    return view('dashboard.add_leaders');
}
    public function create(){
       

        return view('dashboard.add_leaders');
    }

    public function store(Request $request){
        $this->validate($request ,[
            'fullname'=>'required|min:2',
            'level'=>'required|min:2',
            'category'=>'required|min:2',
           
            
            
          ] ); 
          $user =new Leader;
          $user->fullname=$request->input('fullname');
          $user->level=$request->input('level');
          $user->category=$request->input('category'); 

          $user->save();
          return redirect('dash/leader/add')->with('success','LEADER CREATED');

        
    }

    public function show(){

    }

}
