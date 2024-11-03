<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModal;
class ChangeProfilePictureController extends Controller
{
    public function update(Request $request, string $id){
        if(auth()->user() ==null){
            return view('mitm');
        }
       
        $this->validate($request ,[
            
            'profile_image'=>'image|max:1999'
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
             $user->profile_image=$fileNameToStore; 
             $user->save();
         return redirect('dash/profile')->with('success','Profile updated successfully!');
    }
}
