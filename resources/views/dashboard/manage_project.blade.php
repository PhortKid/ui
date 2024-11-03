@extends('dashboard_layouts.app')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE PROJECT</h1>
    
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
<th>Title</th>
<th>Description</th>
<th>Owner</th>
<th>Phone number</th>
<th>Categories</th>
<th>Created_at</th>
<th>Edit</th>
<th>Delete</th>


</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>

    
   @foreach ($projects as $project)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$project->project_name}}</td>
    <td>{!!$project->project_description!!}</td>
    <td>{{$project->owner}}</td>
    <td>{{$project->phone_number}}</td>
    <td>{{$project->categories}}</td>
    <td>{{$project->created_at}}</td>
    <!--<td><a href='#' data-bs-toggle='modal' data-id=''  data-bs-target='#pop' class='showdata' value='' name='data'><i class='fa fa-edit'></i></a></td>-->
    <td><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$project->id}}"><i class='fa fa-edit'></i></a></td>
    <td><a href='#'  data-bs-toggle="modal" data-bs-target="#deleteModal{{$project->id}}"><i class='fa fa-trash'></i></a></td>
   

    @include('dashboard.edit_project')
    @include('dashboard.delete_project_modal')
    </tr> 
   @endforeach





</tbody>
</table>
</div>   

      





@endsection