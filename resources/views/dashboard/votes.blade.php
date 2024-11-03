@extends('dashboard_layouts.app')


@section('content')
<?php
                      $conn=new mysqli('localhost','root','','laravel');
                    ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">votes</h1>
    
</div>



<h1>PRESIDENT</h1>
<div class="row">
    <!-- User Card -->
    @foreach($presidents as $president)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$president->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $president_id=$president->id;
                      $stmt=$conn->prepare("SELECT COUNT('president_id') FROM `voting` WHERE president_id=? ");
                      $stmt->bind_param("s",$president_id);
                      $stmt->execute();
                      $president_data=$stmt->get_result();
                      $president_data=$president_data->fetch_assoc();


                      print_r($president_data["COUNT('president_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>

      <h1>VICE PRESIDENT</h1>
    <div class="row">
    <!-- User Card -->
    @foreach($vice_presidents as $vice_president)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$vice_president->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $vice_president_id=$vice_president->id;
                      $stmt=$conn->prepare("SELECT COUNT('vice_president_id') FROM `voting` WHERE vice_president_id=? ");
                      $stmt->bind_param("s",$vice_president_id);
                      $stmt->execute();
                      $vice_president_data=$stmt->get_result();
                      $vice_president_data=$vice_president_data->fetch_assoc();


                      print_r($vice_president_data["COUNT('vice_president_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>



    <h1>PROJECT MANAGER</h1>
    <div class="row">
    <!-- User Card -->
    @foreach($project_managers as $project_manager)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$project_manager->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $project_manager_id=$project_manager->id;
                      $stmt=$conn->prepare("SELECT COUNT('project_manager_id') FROM `voting` WHERE project_manager_id=? ");
                      $stmt->bind_param("s",$project_manager_id);
                      $stmt->execute();
                      $project_manager_data=$stmt->get_result();
                      $project_manager_data=$project_manager_data->fetch_assoc();


                      print_r($project_manager_data["COUNT('project_manager_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>



    <h1>ASSISTANT PROJECT MANAGER</h1>
    <div class="row">
    <!-- User Card -->
    @foreach($assistant_project_managers as $assistant_project_manager)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$assistant_project_manager->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $assistant_project_manager_id=$assistant_project_manager->id;
                      $stmt=$conn->prepare("SELECT COUNT('assistant_project_manager_id') FROM `voting` WHERE assistant_project_manager_id=? ");
                      $stmt->bind_param("s",$assistant_project_manager_id);
                      $stmt->execute();
                      $assistant_project_manager_data=$stmt->get_result();
                      $assistant_project_manager_data=$assistant_project_manager_data->fetch_assoc();


                      print_r($assistant_project_manager_data["COUNT('assistant_project_manager_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>



    <h1>ACCOUNTANT</h1>
    <div class="row">
    <!-- User Card -->
    @foreach($accountants as $accountant)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$accountant->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $accountant_id=$accountant->id;
                      $stmt=$conn->prepare("SELECT COUNT('accountant_id') FROM `voting` WHERE accountant_id=? ");
                      $stmt->bind_param("s",$accountant_id);
                      $stmt->execute();
                      $accountant_data=$stmt->get_result();
                      $accountant_data=$accountant_data->fetch_assoc();


                      print_r($accountant_data["COUNT('accountant_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>



    <h1>SECRRETARY</h1>
    <div class="row">
    <!-- User Card -->
    @foreach($secretarys as $secretary)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$secretary->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $secretary_id=$secretary->id;
                      $stmt=$conn->prepare("SELECT COUNT('secretary_id') FROM `voting` WHERE secretary_id=? ");
                      $stmt->bind_param("s",$secretary_id);
                      $stmt->execute();
                      $secretary_data=$stmt->get_result();
                      $secretary_data=$secretary_data->fetch_assoc();


                      print_r($secretary_data["COUNT('secretary_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>

   
    <h1>SPORTS</h1>
    <div class="row">
    <!-- User Card -->
    @foreach($sports as $sport)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success  shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{$sport->fullname}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                 
                    <?php
                      $sport_id=$sport->id;
                      $stmt=$conn->prepare("SELECT COUNT('sport_id') FROM `voting` WHERE sport_id=? ");
                      $stmt->bind_param("s",$sport_id);
                      $stmt->execute();
                      $sport_data=$stmt->get_result();
                      $sport_data=$sport_data->fetch_assoc();


                      print_r($sport_data["COUNT('sport_id')"]);
                    ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach
      
    </div>

   

@endsection