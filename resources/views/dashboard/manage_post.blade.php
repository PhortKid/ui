@extends('dashboard_layouts.app')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE POST</h1>
    
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
<th>Body</th>
<th>Image</th>
<th>Created_at</th>
<th>Edit</th>
<th>Delete</th>


</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>
@if(count($posts)>0)
    
   @foreach ($posts as $post)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$post->title}}</td>
    <td>{!!$post->body!!}</td>
    <td><img src="/storage/cover_images/{{$post->cover_image}}" style="width:50px;height:8%"> </td>
    <td>{{$post->created_at}}</td>
    <!--<td><a href='#' data-bs-toggle='modal' data-id=''  data-bs-target='#pop' class='showdata' value='' name='data'><i class='fa fa-edit'></i></a></td>-->
    <td><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$post->id}}"><i class='fa fa-edit'></i></a></td>
    <td><a href='#'  data-bs-toggle="modal" data-bs-target="#deleteModal{{$post->id}}"><i class='fa fa-trash'></i></a></td>
   

    @include('dashboard.edit_post')
    @include('dashboard.delete_post_modal')
    </tr> 
   @endforeach

@else 

  <div class="alert alert-warning">
      no post yet !
  </div>
  @endif



</tbody>
</table>
</div>   

      





@endsection