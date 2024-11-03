<?php

namespace App\Http\Controllers;
use App\Models\ItDayPaid;
use Illuminate\Http\Request;

use DB;
use App\Models\UserModal;

class ItDayPaidController extends Controller
{
    public function index(){

      if(auth()->user() ==null){
         return view('mitm');
     }

       
      $users=UserModal::all();
     
      

        $paids =ItDayPaid::all();

        if(auth()->user()->role == "Admin" || auth()->user()->role == "Accountant")
       return view('dashboard.manage_paid_itday')->with('paids',$paids)->with('users',$users);
       else{
        return view('mitm');

       }
    }
    public function store(Request $request){

      if(auth()->user() ==null){
         return view('mitm');
     }
        $this->validate($request ,[
            'name'=>'required',
            'amount'=>'required',
            'code'=>'required|max:5|min:5'
          ]    
        );

        $paid =new ItDayPaid;
        $paid->name=$request->input('name');
        $paid->amount=$request->input('amount');
        $paid->code=$request->input('code');
        $paid->save();
        
        $users=UserModal::all();
        $paids =ItDayPaid::all();
        return view('dashboard.manage_paid_itday')->with('success','DATA CREATED')->with('paids',$paids)->with('users',$users); 
     }

     public function update(Request $request, string $id){



      if(auth()->user() ==null){
         return view('mitm');
     }
        $this->validate($request ,[
            //'name'=>'required',
            'amount'=>'required',
            'code'=>'required|max:5|min:5'
          ]    
        );

        $paid =ItDayPaid::find($id);
       // $paid->name=$request->input('name');
        $paid->amount=$request->input('amount');
        $paid->code=$request->input('code');
        $paid->save();
        
        $users=UserModal::all();
        $paids =ItDayPaid::all();
        return view('dashboard.manage_paid_itday')->with('success','DATA UPDATED')->with('paids',$paids)->with('users',$users);
     }

     public function destroy(String $id){


      if(auth()->user() ==null){
         return view('mitm');
     }
        $paid =ItDayPaid::find($id);
      
        $paid->delete();

        $users=UserModal::all();
        $paids =ItDayPaid::all();
        return view('dashboard.manage_paid_itday')->with('success','DATA DELETED')->with('paids',$paids)->with('users',$users);
     }

     public function analytics(){
      if(auth()->user() ==null){
         return view('mitm');
     }

     
        $paids =ItDayPaid::all();
        

        if(auth()->user()->role == "Admin" || auth()->user()->role == "Accountant")
        return view('dashboard.itday_analytics')->with('paids',$paids);
        else{
         return view('mitm');
 
        }




   
     }

     public  function allusers(){

         
      //$users =DB::select('SELECT * FROM users');
     
      $users=UserModal::all();
     
      return view('dashboard.manage_paid_itday.index')->with('users',$users);


     }
}
