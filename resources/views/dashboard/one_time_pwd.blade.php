@extends('dashboard_layouts.app')


@section('content')


   
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


