@extends('dashboard_layouts.app')


@section('content')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">IT Day Analytics</h1>
    
</div>




<div class="row">
    <!-- User Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Waliolipa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                    {{count($paids)}}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!-- User Card -->
       <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Waliolipa Nusu</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{count($paids) < 2000}}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!-- User Card -->
       <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Waliolipa Kamili</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{count($paids) >= 20000}}
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
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Waliolipa Zaidi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{count($paids) > 2000}}
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



@endsection