<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alert;
class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       

     $alerts=alert::all();
     return view('dashboard.notification')->with('alerts',$alerts);

    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.add_alert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
               
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        $alerts =alerts::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alerts =alerts::find($id);
      
        $alerts ->delete();
        return redirect('/dash/notification')->with('success','ALERTS  DELETED');
    }
}
