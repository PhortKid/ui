<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ITCLUB  {{auth()->user()->role}} - Dashboard</title>

    <!-- Custom fonts for this template-->
     
    <link href="{{asset('dashboard_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        
        <style>
         .battan-close{
            background-color:transparent;
            border-color:transparent;
         }
         
            .fa-user{
                 color:darkcyan;
             }
         </style>

    <!-- Custom styles for this template-->
    <link href="{{asset('dashboard_assets/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard_assets/css/custom.css')}}" rel="stylesheet" type="text/css">
   <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('dashboard_assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('chosen/chosen.min.css')}}" rel="stylesheet" type="text/css">
    
   

   
    
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style=" background-color:#11472e !important;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-laptop-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3 upper">ITCLUB  {{auth()->user()->role}}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/dash') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>

            </li>
            <?php /*
            <!-- Heading -->
            <div class="sidebar-heading">
                Voting
            </div>

            <!-- Members nav items -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user fa-cog"></i>
                    <span><b>Voting</b></span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">VOTING ACTIVITIES:</h6>
                        @if(auth()->user()->role=="Admin" or auth()->user()->role=="special" )
                        <a class="collapse-item" href="{{ url('/dash/leader/add') }}">Add leaders </a>
                        <a class="collapse-item" href="{{ url('/dash/votes') }}">Votes</a>
                        @endif
                        <a class="collapse-item" href="{{ url('/dash/vote_now') }}">Vote </a>
                       
                        
                    </div>
                </div>
            </li>

            */ ?>
         
           @if(auth()->user()->role=="Member")
            <!-- Heading -->
            <div class="sidebar-heading">
                Members Activities
            </div>

            <!-- Members nav items -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user fa-cog"></i>
                    <span><b>Notification</b></span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">MEMBER ACTIVITIES:</h6>
                        <a class="collapse-item" href="{{ url('/dash/notification') }}">View Notification </a>
                       
                        
                    </div>
                </div>
            </li>

            @endif
            @if(auth()->user()->role=="Admin" or auth()->user()->role=="CR"  )
            <!-- Divider -->
            

            <!-- Heading -->
            <div class="sidebar-heading">
                Members Activities
            </div>

            <!-- Members nav items -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users fa-cog"></i>
                    <span>Members Categories</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Members Group:</h6>
                        @if(auth()->user()->role=="Admin" or auth()->user()->role=="Accountant" or auth()->user()->role=="ProjectManager")
                        <a class="collapse-item" href="{{ url('/dash/member/cert') }}"><i class="fa fa-users p-1"></i>Certificate </a>
                        @elseif(auth()->user()->role=="CR")
                        <a class="collapse-item" href="{{ url('/dash/member/cert/cr') }}"><i class="fa fa-users p-1"></i>Certificate </a>
                        @endif

                        @if(auth()->user()->role=="Admin" or auth()->user()->role=="Accountant" or auth()->user()->role=="ProjectManager")
                        <a class="collapse-item" href="{{ url('/dash/member/diploma') }}"><i class="fa fa-users p-1"></i>Diploma 1</a>
                        @elseif(auth()->user()->role=="CR")
                        <a class="collapse-item" href="{{ url('/dash/member/diploma/cr') }}"><i class="fa fa-users p-1"></i>Diploma 1</a>
                        @endif
                         

                        @if(auth()->user()->role=="Admin" or auth()->user()->role=="Accountant" or auth()->user()->role=="ProjectManager")
                        <a class="collapse-item" href="{{ url('/dash/member/diploma_2') }}"><i class="fa fa-users p-1"></i>Diploma 2</a>
                        @elseif(auth()->user()->role=="CR")
                        <a class="collapse-item" href="{{ url('/dash/member/diploma_2/cr') }}"><i class="fa fa-users p-1"></i>Diploma 2</a>
                        @endif


                       
                        
                        
                    </div>
                </div>
            </li>
            

            
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
           
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    
                    <i class="fas fa-fw fa-users"></i>
                    
                    <span>Member Management</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    
                    <div class="bg-white py-2 collapse-inner rounded">
                    
                        <h6 class="collapse-header">All Member:</h6>
                        
                        <a class="collapse-item" href="{{ url('/dash/member/add') }}"><i class="fa fa-user-plus p-1"></i>Add Member</a>
                        <a class="collapse-item" href="{{ url('/dash/member') }}"><i class="fa fa-user-edit p-1"></i>Manage Member</a>
                        
                        
                        
                    </div>
                </div>
            </li>
            @endif
            <!-- Divider -->
            
            @if(auth()->user()->role=="Admin" OR auth()->user()->role=="ProjectManager" OR auth()->user()->role=="PostMaker" OR auth()->user()->role=="Accountant")
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Club Activities
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span> Club Activities</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      

                    @if(auth()->user()->role=="Admin" or auth()->user()->role=="Accountant") 
                       <h6 class="collapse-header">ItDay waliolipa :</h6>
                       
                       <a class="collapse-item" href="{{ url('/dash/paid_it_day_management') }}"><i class="fa fa-cog p-1"></i>Manage ItDay </a>
                       <a class="collapse-item" href="{{ url('/dash/paid_it_day_management/analytics') }}"><i class="fa fa-chart-bar p-1"></i> ItDay Analytics </a>
                       
                       @else
                    
                      @endif
                      <!--
                        <h6 class="collapse-header">Alert Management:</h6>
                       <a class="collapse-item" href="{{ url('/dash/notify/add') }}">Add Notification</a>
                       <a class="collapse-item" href="#">Manage Notification</a>
                      -->
                      @if(auth()->user()->role=="Admin" or auth()->user()->role=="PostMaker") 
                       <h6 class="collapse-header">Posts :</h6>
                       <a class="collapse-item" href="{{ url('/dash/posts/addpost') }}"><i class="fa fa-plus p-1"></i>Add Post</a>
                       <a class="collapse-item" href="{{ url('/dash/posts/manage') }}"><i class="fa fa-cog p-1"></i>Manage  Post</a>
                      @else
                    
                      @endif
                     

                     @if(auth()->user()->role=="Admin")
                        <h6 class="collapse-header">Project Management:</h6>
                     

                       
                        <a class="collapse-item" href="{{ url('/dash/project/create') }}"><i class="fa fa-user-edit p-1"></i>Add Project</a>
                        <a class="collapse-item" href="{{ url('/dash/project') }}"><i class="fa fa-user-edit p-1"></i>Manage Project</a>
                        <a class="collapse-item" href="#" onclick="alert('Soon...');"><i class="fa fa-chart-bar p-1" ></i>Project Analytics</a>
                        @else
           
                        @endif

                        @if(auth()->user()->role=="ProjectManager")
        
                        <h6 class="collapse-header">Project Management:</h6>
                        <a class="collapse-item" href="{{ url('/dash/project/create') }}"><i class="fa fa-user-edit p-1"></i>Add Project</a>
                        <a class="collapse-item" href="{{ url('/dash/project') }}"><i class="fa fa-user-edit p-1"></i>Manage Project</a>
                        @else
                        @endif

                       
                        
                    </div>
                </div>
            </li>
           
            <!-- Divider -->
            @else
            @endif
        
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                       
                   

                        <!-- Nav Item - Alerts -->

                        
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                
                                <span class="badge badge-danger badge-counter">1
                              
                                </span>
                            </a>
                           
             <!-- DROP DOWN ALERT -->

  @include('dashboard_layouts.alert')


             <!-- END OF DROP DOWN ALERT -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{auth()->user()->firstname}} {{auth()->user()->lastname}}
</span>   
                                <img class="img-profile rounded-circle"
                                    src="/storage/profile_images/{{auth()->user()->profile_image}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('dash/profile')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                              
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                      <!-- Begin Page Content -->
                <div class="container-fluid">
              
                    <!-- Page Heading -->
                    @include('dashboard_layouts.message')
                @yield('content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Itclub 2024 </span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      
                        <a class="btn btn-primary" href={{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                       
                    </div>

                 


                </div>
            </div>
        </div>
        


     
    
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('dashboard_assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="{{asset('dashboard_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="{{asset('dashboard_assets/js/sb-admin-2.min.js')}}"></script>
    
        <!-- Page level plugins -->
        <script src="{{asset('dashboard_assets/vendor/chart.js/Chart.min.js')}}"></script>
    
        <!-- Page level custom scripts -->
        <script src="{{asset('dashboard_assets/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('dashboard_assets/js/demo/chart-pie-demo.js')}}"></script>

        <script src="{{asset('dashboard_assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('dashboard_assets/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ckeditor.js')}}"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#writepost' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

<script src="{{asset('chosen/chosen.jquery.min.js')}}"></script>
<script src="{{asset('chosen/popper.min.js')}}"></script>
         <script>
            $(document).ready(function() {
                $('.chosen-select').chosen({
                    width: '100%', // Make sure the chosen select takes the full width
                    placeholder_text_single: 'Select an option' // Placeholder text for single select
                });
            });
        </script>
    </body>
    
    </html>