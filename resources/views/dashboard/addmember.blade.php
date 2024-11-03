@extends('dashboard_layouts.app')

@section('content')

                <div class="row-1">
                    <div class="card">
                <h5 class="card-header">Register Form</h5>
                <div class="card-body">
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
                     <option value="Admin">Admin</option>
                     
                    
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



                {{ Form::submit('submit', ['class' => 'btn btn-success']) }}
                {!! Form::close() !!}
                
                </div>
                </div>

@endsection