@extends('dashboard_layouts.app')


@section('content')




<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE PAID MEMBER IT DAY</h1>
    
</div>



<!-- DATA TABLE -->     
<div class="row">
    <div class="col-8 col-sm-11"></div> <div class="col-4 col-sm-1"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addpaid">ADD</div></div>
  </div> 
<div class="table-responsive">

<table   class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead class="table-dark">
<tr>
<th>#</th>
<th>NAME</th>
<th>AMOUNT</th>
<th>CODE</th>
<th>DATE</th>
<th>EDIT</th>
<th>DELETE</th>

</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>

    
   @foreach ($paids as $paid)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$paid->name}}</td>
    <td>{{$paid->amount}}</td>
    <td>{{$paid->code}}</td>
    <td>{{$paid->created_at}}</td>
    <!--<td><a href='#' data-bs-toggle='modal' data-id=''  data-bs-target='#pop' class='showdata' value='' name='data'><i class='fa fa-edit'></i></a></td>-->
    <td><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$paid->id}}"><i class='fa fa-edit'></i></a></td>
    <td><a href='#'  data-bs-toggle="modal" data-bs-target="#deleteModal{{$paid->id}}"><i class='fa fa-trash'></i></a></td>
    
    @include('dashboard.editpaid')
    @include('dashboard.delete_paid_modal')
    </tr> 
   @endforeach




</tbody>
</table>
</div>   



<div class="modal fade " id="addpaid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD PAID MEMBER</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        
        <div class="modal-body">
          
        {!! Form::open(['action' =>['App\Http\Controllers\ItDayPaidController@store'],'method'=>'POST']) !!}
                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                   <!-- <input type="text"  class="form-control" id="inputText" name="name" required>-->
                   
                
                   <select name="name" class="chosen-select form-control" id="select-beast">

                    @foreach($users  as $user)
                    <option value="{{$user->firstname}} {{$user->lastname}}">{{$user->firstname}} {{$user->lastname}}</option>
                    @endforeach
                   </select>
                  
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText" name="amount" required>
                </div>
                </div>

                
                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">CODE</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText" name="code" required>
                </div>
                </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
          {{Form::submit('submit',['class'=>'btn btn-primary','id'=>'inputText'])}}
           {!! Form::close() !!}
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection