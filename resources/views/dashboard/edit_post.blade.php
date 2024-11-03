

<div class="modal fade " id="exampleModal{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">UPDATE INFORMATION</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-minus"></i></button>
        </div>
        
        <div class="modal-body">
          
            {!! Form::open(['action' =>['App\Http\Controllers\PostController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
       
            <div class="mb-3 row">

                {{Form::label('body','Title' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
                <div class="col-sm-10">
                    
                    {{Form::text('title',$post->title,['id'=>'inputText','class'=>'form-control','placeholder'=>'Title..'])}}
                </div>
                </div>
                
                <div class="mb-3 row">
                
                {{Form::label('body','Body' ,['class'=>'col-sm-2 col-form-label','for'=>'inputText'])}}
                <div class="col-sm-10">
                    
                   
                      {{Form::textarea('body',$post->body,['id'=>'writepost','class'=>'form-control','placeholder'=>'Write post..'])}}
                         <br>
                      {{Form::file('cover_image')}}
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