@extends('layouts.master')

@section('content')

   
<br><br>
    <div class="panel-body">
      
        

          <form action="{{ route('townships.update', $township->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="id" value="{{$township->id}}" />
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{$township->Name}}" >
                </div>
            </div>
           

            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-plus"></i> Add 
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection