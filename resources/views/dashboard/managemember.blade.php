@extends('dashboard_layouts.app')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE MEMBERS</h1>
    
</div>

   
    
<!-- DATA TABLE -->     
   <div class="row">
    <div class="col-8 col-sm-10"></div> <div class="col-4 col-sm-2"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addmember">ADD MEMBER</div></div>
  </div> 
<div class="table-responsive">

<table   class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead class="table-dark">
<tr>
<th>#</th>
<th>FULLNAME</th>
<th>RegNo</th>
<th>Program</th>
<th>Edit</th>
<th>Delete</th>

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
    <!--<td><a href='#' data-bs-toggle='modal' data-id=''  data-bs-target='#pop' class='showdata' value='' name='data'><i class='fa fa-edit'></i></a></td>-->
    <td><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}"><i class='fa fa-edit'></i></a></td>
    <td><a href='#'  data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}"><i class='fa fa-trash'></i></a></td>
    
    @include('dashboard.editmember')
    @include('dashboard.delete_user_modal')
    </tr> 
   @endforeach
@else 

  
  @endif



</tbody>
</table>
</div>   

      

<div class="modal fade " id="addmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD MEMBER</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        
        <div class="modal-body">
          
        {!! Form::open(['action' =>['App\Http\Controllers\UsersController@store'],'method'=>'POST']) !!}

        <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">FirstName</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText"  name="firstname" required>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">MiddleName</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText" name="middlename" required>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">LastName</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText" name="lastname" required>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Reg No</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText" name="regno" required>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="Email"  class="form-control" id="inputEmail" name="email" required>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">PhoneNumber</label>
                <div class="col-sm-10">
                    <input type="number"  class="form-control" id="inputText" name="phonenumber" required>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Select Gender</label>

                <div class="col-sm-10">
                <select class="form-select form-control" aria-label="Default select example" name="gender" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>

                </select>
                </div>
                </div>

                <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Program</label>

                <div class="col-sm-10">
                <select class="form-select form-control" aria-label="Default select example" name="program">
                    <option value="CIT">CIT</option>
                    <option value="DIT">DIT1</option>
                    <option value="DIT2">DIT2</option>

                </select>
                </div>
                </div>
                @if(auth()->user()->role=="Admin")
                <div class="mb-3 row">
                 <label for="inputText" class="col-sm-2 col-form-label">{{__('Member Role')}}</label>
           
                 <div class="col-sm-10">
                 <select class="form-select form-control" aria-label="Default select example" name="role">
                     
                    
                     <option value="Member">Member</option>
                     <option value="CR">CR</option>
                     <option value="Accountant">Accountant</option>
                     <option value="ProjectManager">Project Manager</option>
                     <option value="PostMaker">PostMaker</option>
                     <option value="Admin">Admin</option>
                     <option value="special">Special</option>
                     
                     
                    
                 </select>
                 </div>
                </div>
                
                @endif
               

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
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


