<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; //mimi kwasababu ya middleware
use Illuminate\Http\Request;
use App\Models\project;


use DB;
use App\Models\UserModal;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
    public function index()
    {
         
        if(auth()->user() ==null){
            return view('mitm');
        }
        


        $projects=project::all();
        if(auth()->user()->role =="ProjectManager" || auth()->user()->role =="Admin"){
            return view('dashboard.manage_project')->with('projects',$projects);
        }else{
            return view('mitm');
        }
       
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user() ==null){
            return view('mitm');
        }
        
        $users=UserModal::all();
        if(auth()->user()->role =="ProjectManager" || auth()->user()->role =="Admin"){
            return view('dashboard.add_project')->with("users",$users);
          } 
          else{
            return view('mitm');
          }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'project_name'=>'required|min:2',
            'project_description'=>'required',
            'owner'=>'required',
            'phone_number'=>'required|min:10|max:13',
            'link_address'=>'nullable',
            'categories'=>'required'

          ]    
        );

        $project =new project;
        $project->project_name=$request->input('project_name');
        $project->project_description=$request->input('project_description');
        $project->owner=$request->input('owner');
        $project->phone_number=$request->input('phone_number');
        $project->link_address=$request->input('link_address');
        $project->categories=$request->input('categories');
        $project->save();


        if(auth()->user() ==null){
            return view('mitm');
        }
        



        if(auth()->user()->role =="ProjectManager" || auth()->user()->role =="Admin"){
          return redirect('dash/project/create')->with('success','PROJECT CREATED');
          
        }else{
            return view('mitm');
        }

        

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request ,[
            'project_name'=>'required|min:2',
            'project_description'=>'required',
            'owner'=>'required',
            'phone_number'=>'required|min:10|max:13',
            'link_address'=>'nullable',
            'categories'=>'required'

          ]    
        );

        $project =project::find($id);
        $project->project_name=$request->input('project_name');
        $project->project_description=$request->input('project_description');
        $project->owner=$request->input('owner');
        $project->phone_number=$request->input('phone_number');
        $project->link_address=$request->input('link_address');
        $project->categories=$request->input('categories');
        $project->save();
       
       
        return redirect('/dash/project')->with('success','PROJECT UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project =project::find($id);
      
        $project->delete();
        return redirect('/dash/project')->with('success','PROJECT  DELETED');
    }
}
