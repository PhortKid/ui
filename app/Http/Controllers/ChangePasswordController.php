<?php

namespace App\Http\Controllers;
use App\Models\UserModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class ChangePasswordController extends Controller
{   
    public function change(){

        $user_datas=UserModal::find(auth()->user()->id);
        return view('dashboard.one_time_pwd')->with('user_datas',$user_datas);
    }
    
    public function update(Request $request, string $id){

        $request->validate([
            
            'new_password' => 'required|min:8',
            'password_confirmation' => 'required_with:new_password|same:new_password|min:8|password_complexity'
        ], [
            
           'password_confirmation.password_complexity'=>'Password must include at least 1 Symbol ,1 number ,Uppercase and Lowercase',
            'password_confirmation.same' => 'The new password and confirmation password must match.'
        ]);
    
        $user=UserModal::find($id);
        $user->password = Hash::make($request->input('new_password'));
        $user->is_pwd_change ='yes';
     
    
        
        $user->save();
    
       
        return redirect('dash/profile')->with('success', 'Profile updated successfully!');
    
    
       }

}
