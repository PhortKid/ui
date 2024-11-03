@extends('dashboard_layouts.app')


@section('content')
<div class="row-1">
    <div class="card">
<h5 class="card-header">Create Posts</h5>
<div class="card-body">
    {!! Form::open(['action' =>['App\Http\Controllers\AlertsController@store'],'method'=>'POST']) !!}

<div class="mb-3 row">

{{Form::label('message','Message' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
<div class="col-sm-10">
    
    {{Form::text('message','',['id'=>'inputText','class'=>'form-control','placeholder'=>'Title..'])}}
</div>
</div>


<div class="row">
    <div class="col-10"></div>
    {{ Form::submit('Post', ['class' => 'btn btn-success col-2']) }}
    </div>
    {!! Form::close() !!}
    
    </div>
    </div>
    </div>
    
    

@endsection