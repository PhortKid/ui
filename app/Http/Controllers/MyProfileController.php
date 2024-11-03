<?php

namespace App\Http\Controllers;
use App\Models\UserModal;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index()
    {
        if(auth()->user() ==null){
            return view('mitm');
        }
        $user_datas=UserModal::find(auth()->user()->id);
         
        return view('dashboard.profile')->with('user_datas',$user_datas);
    }

    public function store(Request $request,$id){
      
        if(auth()->user() ==null){
            return view('mitm');
        }
        $this->validate($request ,[
            
            'profile_image'=>'image|nullable|max:1999'
          ]    
        );

        if($request->hasFile('profile_image')){
            $fileNameWithExt=$request->file('profile_image')->getClientOriginalName();
 
            //FILE NAME
            $fileName =pathinfo($fileNameWithExt,PATHINFO_FILENAME);
 
            //EXTENSION
            $extension =$request->file('profile_image')->getClientOriginalExtension();
            //filenameto store
 
            $fileNameToStore =$fileName.'_'.time().'.'.$extension;
 
            $path=$request->file('profile_image')->storeAs('public/profile_images',$fileNameToStore);
         }else{
             $fileNameToStore="no_image.png";
         }

             $user=UserModal::find($id);
             $user->$request->profile_image=$fileNameToStore; 
             $user->$request->save();
         return redirect('dash/profile')->with('success','Profile updated successfully!');
    }

    public function update(Request $request, string $id){
        if(auth()->user() ==null){
            return view('mitm');
        }
        $this->validate($request ,[
            'email'=>'required|email',       
          ]    
        );  





        $user=UserModal::find($id);
        $user->email=$request->input('email');
        $user->save();
        return redirect('dash/profile')->with('success','Profile updated successfully!');
    }

   public function passwords(Request $request, string $id){
    if(auth()->user() ==null){
        return view('mitm');
    }
 
    $this->validate($request ,[
        'current_password' => 'required|password',
        'new_password' => 'required|min:8|different:current_password',
        'password_confirmation' => 'required_with:new_password|same:new_password|min:8'
        
      ]    
    );  

    
    $user->password = Hash::make($request->input('new_password'));
    

    
    $user->save();

   
    return redirect('dash/profile')->with('success', 'Profile updated successfully!');


   }

   public function show(){
    
   }
}
