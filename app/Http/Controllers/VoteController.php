<?php

namespace App\Http\Controllers;
use DB;
use App\Models\UserModal;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class VoteController extends Controller
{
    public function index(){

        if(auth()->user()->is_vote =="no"){
            $presidents=DB::select('SELECT * FROM `leader` WHERE   category="president" ');
            $vice_presidents=DB::select('SELECT * FROM `leader` WHERE   category="vice_president" ');
            $project_managers=DB::select('SELECT * FROM `leader` WHERE   category="project_manager" ');
            $assistant_project_managers=DB::select('SELECT * FROM `leader` WHERE   category="assistant_project_manager" ');
            $secretarys=DB::select('SELECT * FROM `leader` WHERE   category="secretary" ');
            $accountants=DB::select('SELECT * FROM `leader` WHERE   category="accountant" ');
            $sports=DB::select('SELECT * FROM `leader` WHERE   category="sports" ');
            
            return view('dashboard.vote')->with('presidents',$presidents)->with('vice_presidents',$vice_presidents)->with('project_managers',$project_managers)->with('assistant_project_managers',$assistant_project_managers)->with('secretarys',$secretarys)->with('accountants',$accountants)->with('sports',$sports);
        

        }else{
            return redirect('dash/already_vote')->with('success','Your Alredy Voted');
        }
  
       
    }

    public function store(Request $request){
        
        $this->validate($request ,[
            'president'=>'required|min:1',
            'vice_president'=>'required|min:1',
            'project_manager'=>'required|min:1',
            'assistant_project_manager'=>'required|min:1',
            'secretary'=>'required|min:1',
            'accountant'=>'required|min:1',
            'sport'=>'required|min:1',
               
          ] );

          if(auth()->user()->is_vote =="no"){
          $vote =new Vote;
          $vote->president_id=$request->input('president');
          $vote->vice_president_id=$request->input('vice_president');
          $vote->project_manager_id=$request->input('project_manager');
          $vote->assistant_project_manager_id=$request->input('assistant_project_manager');
          $vote->secretary_id=$request->input('secretary');
          $vote->accountant_id=$request->input('accountant');
          $vote->sport_id=$request->input('sport');
          $vote->voter_id=Auth()->user()->id;
          $vote->save();

         // $user_id=Auth()->user()->id;
          $user = UserModal::find(Auth()->user()->id);
          $user->is_vote='yes';
          $user->save();
     

          return redirect('dash/vote_now')->with('success','Your Alredy Voted');
          }
          else{
           // echo "Your Alredy Voted";
            return redirect('dash/already_vote')->with('success','Your Alredy Voted');
          }


    }
}
