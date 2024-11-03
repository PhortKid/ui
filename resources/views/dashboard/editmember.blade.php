

<div class="modal fade " id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">UPDATE INFORMATION</h5>
          <button type="button"  class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        
        <div class="modal-body">
          
            {!! Form::open(['action' =>['App\Http\Controllers\UsersController@update',$user->id],'method'=>'POST']) !!}
       
        <div class="mb-3 row">
            {{Form::label('inputText','FirstName',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('firstname',$user->firstname,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>
  
        <div class="mb-3 row">
            {{Form::label('inputText','MiddleName',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('middlename',$user->middlename,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>
  
        <div class="mb-3 row">
            {{Form::label('inputText','LastName',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('lastname',$user->lastname,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>
  
        <div class="mb-3 row">
            {{Form::label('inputText','Reg No',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('regno',$user->regno,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>
        <div class="mb-3 row">
            {{Form::label('inputText','Email',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::email('email',$user->email,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>
  
       
  
        <div class="mb-3 row">
            {{Form::label('inputText','PhoneNumber',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::number('phonenumber',$user->phonenumber,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>
  
        <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Select Gender')}}</label>
  
        <div class="col-sm-10">
        <select class="form-select form-control"  aria-label="" name="gender" >
            <option @selected(true)>{{$user->gender}}</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            
           
        </select>
        </div>
       </div>
  
       <div class="mb-3 row">
        <label for="inputText" class="col-sm-2 col-form-label">{{__('Program')}}</label>
  
        <div class="col-sm-10">
        <select class="form-select form-control" aria-label="Default select example" name="program">
            <option @selected(true)>{{$user->program}}</option>
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
            
            <option @selected(true)>{{$user->role}}</option>
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
            
  <?php  /*
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">{{__('Password')}}</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="password" >
                </div>
            </div>
            */
  ?>
  
            
  
        {{ Form::hidden('_method', 'PUT') }}
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
          {{Form::submit('submit',['class'=>'btn btn-primary','id'=>'inputText'])}}
         
          </form>
        </div>
      </div>
    </div>
  </div>