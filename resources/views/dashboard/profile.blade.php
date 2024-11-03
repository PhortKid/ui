@extends('dashboard_layouts.app')


@section('content')

<div class="row ml-5 ">
    <div class="card col-12 col-sm-9 ">
<h5 class="card-header">Profile</h5>
<div class="card-body">
    <div class="mb-3 row ">
        
        <img class="img-profile rounded-circle"  src="/storage/profile_images/{{auth()->user()->profile_image}}" style="margin-left:5%" width="200px">
      
    </div>
    {!! Form::open(['action' =>['App\Http\Controllers\ChangeProfilePictureController@update',$user_datas->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   
    <div class="mb-3 row">
        {{Form::label('inputText','Fullname',['class'=>'col-sm-2 col-form-label'])}}
        <div class="col-sm-6">
            <input type="text"  class="form-control" disabled value="{{auth()->user()->firstname}} {{auth()->user()->lastname}}">
        </div>
    </div>

    <div class="mb-3 row">
        {{Form::label('inputText','Reg No',['class'=>'col-sm-2 col-form-label'])}}
        <div class="col-sm-6">
            <input type="text"  class="form-control" disabled value="{{auth()->user()->regno}}">
        </div>
    </div>
   
    <div class="col-sm-10">
        {{Form::file('profile_image')}}
    </div>
    {{ Form::hidden('_method', 'PUT') }}



   <br>

    <div class="">
        {{Form::submit('CHANGE PROFILE',['class'=>'form-control bg-primary text-white','id'=>'inputText'])}}
    </div>
 
    {!! Form::close() !!}
    
</div>
</div>
</div>


<div class="row mt-5 ml-5">
    <div class="card col-12 col-sm-9">
<h5 class="card-header">CHANGE EMAIIL</h5>
<div class="card-body">

    {!! Form::open(['action' =>['App\Http\Controllers\MyProfileController@update',$user_datas->id],'method'=>'POST']) !!}
    <div class="mb-3 row">
        {{Form::label('inputText','Email',['class'=>'col-sm-2 col-form-label'])}}
        <div class="col-sm-6">
            {{Form::email('email',$user_datas->email,['class'=>'form-control','id'=>'inputText'])}}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        <div class="">
            {{Form::submit('CHANGE EMAIL',['class'=>'form-control bg-primary text-white','id'=>'inputText'])}}
        </div>
    </div>
    {!! Form::close() !!}
    <BR>
    </div>
</div>
</div>  
   
        <div class="row mt-5 ml-5">
            <div class="card col-12 col-sm-9">
        <h5 class="card-header">CHANGE PASSWORD</h5>
        <div class="card-body">  
    
        {!! Form::open(['action' =>['App\Http\Controllers\ChangePasswordController@update',$user_datas->id],'method'=>'POST']) !!}
      

    <div class="mb-3 row">
        {{Form::label('inputText','New Password',['class'=>'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            
            <input type="password"  class='form-control' id='inputText' name="new_password">
        </div>
    </div>

    <div class="mb-3 row">
        {{Form::label('inputText','Retype Password',['type'=>'password','class'=>'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
           
            <input type="password"  class='form-control' id='inputText' name="password_confirmation">
        </div>
    </div>
    {{ Form::hidden('_method', 'PUT') }}

    <div class="">
        {{Form::submit('CHANGE PASSWORD',['class'=>'form-control bg-primary text-white','id'=>'inputText'])}}
    </div>
    {!! Form::close() !!}
    
</div>
</div>
</div>



@endsection


