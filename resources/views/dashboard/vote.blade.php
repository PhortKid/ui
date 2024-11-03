@extends('dashboard_layouts.app')


@section('content')

<div class="row-1">
    <div class="card">
<h5 class="card-header">Add leaders</h5>
<div class="card-body">
    {!! Form::open(['action' =>['App\Http\Controllers\VoteController@store'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select President')}}</label>
      
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="president"  id="select-beast"  required>
          <option value="">{{__('Select President')}}</option>  
          @foreach($presidents as $president)
            <option value="{{$president->id}}">{{$president->fullname}}</option>
           @endforeach
            
           
        </select>
        </div>
       </div>

       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select Vice President')}}</label>
    
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="vice_president"  id="select-beast"  required>
        <option value="">{{__('Select Vice President')}}</option>  
          @foreach($vice_presidents as $vice_president)
            <option value="{{$vice_president->id}}">{{$vice_president->fullname}}</option>
           @endforeach
            
           
        </select>
        </div>
       </div>


       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select Project Manager')}}</label>
  
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="project_manager"  id="select-beast"  required>
        <option value="">{{__('Select Project Manager')}}</option>   
          @foreach($project_managers as $project_manager)
            <option value="{{$project_manager->id}}">{{$project_manager->fullname}}</option>
           @endforeach
            
           
        </select>
        </div>
       </div>
                     
       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select  Assistant Project Manager')}}</label>
  
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="assistant_project_manager"  id="select-beast"  required>
        <option value="">{{__('Select  Assistant Project Manager')}}</option>  
          @foreach($assistant_project_managers as $assistant_project_manager)
            <option value="{{$assistant_project_manager->id}}">{{$assistant_project_manager->fullname}}</option>
           @endforeach
            
           
        </select>
        </div>
       </div>

       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select  Secretary')}}</label>
  
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="secretary"  id="select-beast"  required>
        <option value="">{{__('Select  Secretary')}}</option>   
          @foreach($secretarys as $secretary)
            <option value="{{$secretary->id}}">{{$secretary->fullname}}</option>
           @endforeach
            
           
        </select>
        </div>
       </div>

       
       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select  Accountant')}}</label>
  
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="accountant"  id="select-beast"  required>
        <option value="">{{__('Select  Accountant')}}</option>  
          @foreach($accountants as $accountant)
            <option value="{{$accountant->id}}">{{$accountant->fullname}}</option>
           @endforeach
            
           
        </select>
        </div>
       </div>

       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select  Sports')}}</label>
  
        <div class="col-sm-10">
        <select class="chosen-select form-control"   aria-label="" name="sport"  id="select-beast"  required>
        <option value="">{{__('Select  Sports')}}</option>    
          @foreach($sports as $sport)
            <option value="{{$sport->id}}">{{$sport->fullname}}</option>
           @endforeach
            
           
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