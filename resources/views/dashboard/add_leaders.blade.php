@extends('dashboard_layouts.app')


@section('content')

<div class="row-1">
    <div class="card">
<h5 class="card-header">Add leaders</h5>
<div class="card-body">
    {!! Form::open(['action' =>['App\Http\Controllers\leadersController@store'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="mb-3 row">

{{Form::label('title','Leader Name' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
<div class="col-sm-10">
    
    {{Form::text('fullname','',['id'=>'inputText','class'=>'form-control','placeholder'=>'Fullname..'])}}
</div>
</div>



<div class="mb-3 row">
    {{Form::label('level','Level' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
    <div class="col-sm-10">
        <select name="level" class="chosen-select form-control" id="select-beast">

            
            <option value="cit">Certificate</option>
            <option value="dit_1">Diploma</option>
           
           </select>
    </div>
    </div>

    
    
  

    <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select Categories')}}</label>
  
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="category"  id="select-beast">
            
            <option value="president">President</option>
            <option value="vice_president">Vice President</option>
            <option value="project_manager">Project Manager</option>
            <option value="assistant_project_manager">Assistant Project Manager</option>
            <option value="secretary">Secretary</option>
            <option value="accountant">Accountant</option>
            <option value="sports">Sports</option>
            
           
        </select>
        </div>
       </div>
  
    


<div class="row">
<div class="col-10"></div>
{{ Form::submit('Add Leader', ['class' => 'btn btn-success col-2']) }}
</div>
{!! Form::close() !!}

</div>
</div>
</div>






@endsection