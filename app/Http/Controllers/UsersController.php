<?php

namespace App\Http\Controllers;
use DB;
use App\Models\alert;
use Illuminate\Http\Request;
use App\Models\UserModal;
use Illuminate\Support\Facades\Hash; //nime include myself

use Illuminate\Support\Facades\Auth; //jumapili
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
       // if(auth()->user() ==null){
        //    return view('mitm');
        //}


       // $users=UserModal::where('program',$data)->get();
            

      /* if(auth()->user()->role=="Admin"){
        $users=UserModal::all();  
        return view('dashboard.managemember')->with('users',$users);
       }else if(auth()->user()->role=="CR"){
        $users=DB::select('SELECT * FROM `users` WHERE role="Member" OR role="CR" ');
        return view('dashboard.managemember')->with('users',$users);
       }else{
       // return view('mitm');
        return view('dashboard.managemember')->with('users',$users);//hapa
       }

       */
        $users=UserModal::all();
        return view('dashboard.managemember')->with('users',$users);//hapa
       

    }

    public function certificate_member(){

        $users=UserModal::where('program','CIT')->get();

        

        
        return view('dashboard.certificate_member')->with('users',$users);
    }
    
    public function diploma_member(){

        $users=UserModal::where('program','DIT')->get();
        return view('dashboard.diploma_member')->with('users',$users);
    }
    public function diploma2_member(){

        $users=UserModal::where('program','DIT2')->get();
        return view('dashboard.diploma_2_member')->with('users',$users);
    }
    
    public function dash(){
        if(auth()->user() ==null){
            return view('mitm');
        }

        if(auth()->user()->is_pwd_change =="no"){
            return redirect('dash/pwd_change');
       }else{
            
                 
        $users =DB::select('SELECT program FROM users');
        $usersc =DB::select('SELECT * FROM users WHERE program="CIT"');
        $usersd =DB::select('SELECT * FROM users WHERE program="DIT"');
        $usersd2 =DB::select('SELECT * FROM users WHERE program="DIT2"');
       // $users=UserModal::all();
        $alerts=alert::all();
        return view('dashboard.index')->with('users',$users)->with('usersc',$usersc)->with('usersd', $usersd)->with('usersd2',$usersd2)->with('alerts',$alerts);
       
    }

}
/*
    public function profile(){

        $user_datas=UserModal::find(auth()->user()->id);
         
        return view('dashboard.profile')->with('user_datas',$user_datas);
    }
*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'firstname'=>'required|min:2',
            'middlename'=>'required|min:2',
            'lastname'=>'required|min:2',
            'regno'=>'required|min:7',
            'email'=>'required|email',
            'phonenumber'=>'required|max:13|min:10',
            'gender'=>'required|min:4',
            'program'=>'required|min:3',
            'password'=>'required|min:8|password_complexity'
            
          ] , [
            
            'password.password_complexity'=>'Password must include at least 1 Symbol ,1 number ,Uppercase and Lowercase',
            
         ]  
        );  
            
            $user =new UserModal;
            $user->firstname=$request->input('firstname');
            $user->middlename=$request->input('middlename');
            $user->lastname=$request->input('lastname');
            $user->name=$request->input('regno');
            $user->regno=$request->input('regno');
            $user->email=$request->input('email');
            $user->phonenumber=$request->input('phonenumber');
            $user->gender=$request->input('gender');
            $user->program=$request->input('program');
            $user->role=$request->input('role');
            $user->password=Hash::make($request['password']);
            
           
            
           
            
            $user->save();
        return redirect('dash/member')->with('success','USER CREATED');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        

       
    $data = UserModel::find($id);
    return response()->json($data);


        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request ,[
            'firstname'=>'required|min:2',
            'middlename'=>'required|min:2',
            'lastname'=>'required|min:2',
            'regno'=>'required|min:7',
            'email'=>'required|email',
            'phonenumber'=>'required|max:13|min:10',
            'gender'=>'required|min:4',
            'program'=>'required|min:3',
            'role'=>'required|min:3',
            //'password'=>'required|min:8|password_complexity',
            
          ]  , [
            
            'password.password_complexity'=>'Password must include at least 1 Symbol ,1 number ,Uppercase and Lowercase',
            
         ]    
        );  
            
            $user =UserModal::find($id);
            $user->firstname=$request->input('firstname');
            $user->middlename=$request->input('middlename');
            $user->lastname=$request->input('lastname');
            $user->regno=$request->input('regno');
            $user->email=$request->input('email');
            $user->phonenumber=$request->input('phonenumber');
            $user->gender=$request->input('gender');
            $user->program=$request->input('program');
            $user->role=$request->input('role');
            //$user->password=Hash::make($request['password']);
            
           
            
           
            
            $user->save();
        return redirect('dash/member')->with('success','USER UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user =UserModal::find($id);
      
        $user->delete();
        return redirect('/dash/member')->with('success','USER DELETED');
    }

    public function update_profile_password(){



    }
 

}
