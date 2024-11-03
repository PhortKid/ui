@extends('dashboard_layouts.app')


@section('content')

<div class="row-1">
    <div class="card">
<h5 class="card-header">Create Project</h5>
<div class="card-body">
    {!! Form::open(['action' =>['App\Http\Controllers\ProjectController@store'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="mb-3 row">

{{Form::label('title','Project Title' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
<div class="col-sm-10">
    
    {{Form::text('project_name','',['id'=>'inputText','class'=>'form-control','placeholder'=>'Title..'])}}
</div>
</div>

<div class="mb-3 row">
{{Form::label('project_description','Project description' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
<div class="col-sm-10">
      {{Form::textarea('project_description','',['id'=>'writepost','class'=>'form-control','placeholder'=>'Project description..'])}}
</div>
</div>


<div class="mb-3 row">
    {{Form::label('owner','Owner' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
    <div class="col-sm-10">
        <select name="owner" class="chosen-select form-control" id="select-beast">

            @foreach($users  as $user)
            <option value="{{$user->firstname}} {{$user->lastname}}">{{$user->firstname}} {{$user->lastname}}</option>
            @endforeach
           </select>
    </div>
    </div>

    <div class="mb-3 row">
        {{Form::label('phone_number','Phone Number' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
        <div class="col-sm-10">
              {{Form::text('phone_number','',['id'=>'content','class'=>'form-control','placeholder'=>'Phone number..'])}}
        </div>
        </div>

    
<div class="mb-3 row">
    {{Form::label('link_address','Link address' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
    <div class="col-sm-10">
          {{Form::text('link_address','',['id'=>'content','class'=>'form-control','placeholder'=>'https://..'])}}
    </div>
    </div>

    <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select Categories')}}</label>
  
        <div class="col-sm-10">
        <select class="form-select form-control"  aria-label="" name="categories" >
            
            <option value="software">Software</option>
            <option value="hardware">Hardware</option>
            <option value="hardware">others</option>
            
           
        </select>
        </div>
       </div>
  
    


<div class="row">
<div class="col-10"></div>
{{ Form::submit('Create Project', ['class' => 'btn btn-success col-2']) }}
</div>
{!! Form::close() !!}

</div>
</div>
</div>






@endsection