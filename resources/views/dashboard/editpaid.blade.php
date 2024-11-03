

<div class="modal fade " id="exampleModal{{$paid->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">UPDATE INFORMATION</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-minus"></i></button>
        </div>
        <div class="modal-body">
        {!! Form::open(['action' =>['App\Http\Controllers\ItDayPaidController@update',$paid->id],'method'=>'POST']) !!}

        <div class="mb-3 row">
            {{Form::label('inputText','Name',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
             <?php //   {{Form::text('name',$paid->name,['class'=>'form-control','id'=>'inputText'])}}  ?>

                <select name="name" class="chosen-select form-control" id="select-beast" <?php echo "disabled";  ?>>

                  @foreach($users  as $user)
                  <option value="{{$paid->name}}">{{$paid->name}}</option>
                  @endforeach
                 </select>
            </div>
        </div>
  
        <div class="mb-3 row">
            {{Form::label('inputText','Amount',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('amount',$paid->amount,['class'=>'form-control','id'=>'inputText'])}}
            </div>
        </div>

        <div class="mb-3 row">
            {{Form::label('inputText','Code',['class'=>'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('code',$paid->code,['class'=>'form-control','id'=>'inputText'])}}
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