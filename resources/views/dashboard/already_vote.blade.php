@extends('dashboard_layouts.app')



@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

       
</div>
<div class="row">

    


</div>





@endsection