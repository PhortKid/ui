

<div class="modal fade " id="exampleModal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">UPDATE INFORMATION</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-minus"></i></button>
        </div>
        <div class="modal-body">
        {!! Form::open(['action' =>['App\Http\Controllers\ProjectController@update',$project->id],'method'=>'POST']) !!}

        <div class="mb-3 row">
        
        {{Form::label('title','Project Title' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
        <div class="col-sm-10">
            
            {{Form::text('project_name',$project->project_name,['id'=>'inputText','class'=>'form-control','placeholder'=>'Title..'])}}
        </div>
        </div>
        
        <div class="mb-3 row">
        {{Form::label('project_description','Project description' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
        <div class="col-sm-10">
              {{Form::textarea('project_description',$project->project_description,['id'=>'writepost','class'=>'form-control','placeholder'=>'Project description..'])}}
        </div>
        </div>
        
        
        <div class="mb-3 row">
            {{Form::label('owner','Owner' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
            <div class="col-sm-10">
                  {{Form::text('owner',$project->owner,['id'=>'content','class'=>'form-control','placeholder'=>'Owner..'])}}
            </div>
            </div>
            
            <div class="mb-3 row">
                {{Form::label('phone_number','Phone Number' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
                <div class="col-sm-10">
                      {{Form::text('phone_number',$project->phone_number,['id'=>'content','class'=>'form-control','placeholder'=>'Phone number..'])}}
                </div>
                </div>

            <div class="mb-3 row">
            {{Form::label('link_address','Link address' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
            <div class="col-sm-10">
                  {{Form::text('link_address',$project->owner,['id'=>'content','class'=>'form-control','placeholder'=>'https://..'])}}
            </div>
            </div>
        
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">{{__('Select Categories')}}</label>
          
                <div class="col-sm-10">
                <select class="form-select form-control"  aria-label="" name="categories" >
                    
                    <option value="software">Software</option>
                    <option value="hardware">Hardware</option>
                    <option value="hardware">others</option>
                    
                   
                </select>
                </div>
               </div>



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