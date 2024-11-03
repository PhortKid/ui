@extends('dashboard_layouts.app')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">CERTIFICATE MEMBERS</h1>
    
</div>

   
    
<!-- DATA TABLE -->     
<!--   <div class="row">
    <div class="col-11"></div> <div class="col-1"> <div class="btn btn-success m-1">button</div></div>
  </div> -->
 

      




<div class="table-responsive">

<table   class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead class="table-dark">
<tr>
<th>#</th>
<th>FULLNAME</th>
<th>RegNo</th>
<th>Program</th>
<th>Email</th>
<th>Phone Number</th>
<th>Gender</th>

</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>
@if(count($users)>0)
    
   @foreach ($users as $user)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</td>
    <td>{{$user->regno}}</td>
    <td>{{$user->program}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phonenumber}}</td>
    <td>{{$user->gender}}</td>
    <!--<td><a href='#' data-bs-toggle='modal' data-id=''  data-bs-target='#pop' class='showdata' value='' name='data'><i class='fa fa-edit'></i></a></td>-->
   <?php /* <td><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}"><i class='fa fa-edit'></i></a></td>
    <td><a href='#'  data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}"><i class='fa fa-trash'></i></a></td>
    */ ?> 
    @include('dashboard.editmember')
    @include('dashboard.delete_user_modal')
    </tr> 
   @endforeach
@else 


  @endif



</tbody>
</table>
</div>  

 



@endsection


