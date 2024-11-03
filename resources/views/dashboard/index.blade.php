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

    @if(auth()->user()->role =="Admin" or auth()->user()->role =="Accountant" or auth()->user()->role=="ProjectManager")
       
  
    <!-- User Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Members registered</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                    {{count($users)}}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Certificate</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{count($usersc)}}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Diploma 1</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{count($usersd)}}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Diploma 2</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{count($usersd2)}}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>


</div>













<!-- Content Row -->


@else
   
@endif

@if(auth()->user()->role=="Member" or auth()->user()->role=="CR"  or auth()->user()->role=="PostMaker")
</div>
 @else
 
 @endif
    
<!-- Content Row -->
<div class="row">


      

        
    <div class="col-lg-14 mb-4">

       
        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">IT CLUB ANNOUNCEMENT</h6>
            </div>
            <div class="card-body">
                <p>Welcome {{auth()->user()->role}} <u><b>{{auth()->user()->firstname}}</b></u> to ITClub Management System .</p>
               
            </div>
          
        </div>
       


    </div>


</div>





@endsection