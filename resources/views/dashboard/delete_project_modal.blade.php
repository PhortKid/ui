
<div class="modal fade " id="deleteModal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="f"></i>DELETE POST</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        
        <div class="modal-body">
            {!! Form::open(['action' =>['App\Http\Controllers\ProjectController@destroy',$project->id],'method'=>'POST']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
           
            <p>Are you sure you want to delete this project ?</p>
              
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
               {!! Form::close() !!}
              </div>

        
    </div>
  </div>
</div>
</div>        
