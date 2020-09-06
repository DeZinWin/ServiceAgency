@extends('layouts.master')

@section('content')

   

    <div class="panel-body">
      
        

          <form action="{{ route('service_categories.update', $service_category->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="id" value="{{$service_category->id}}" />
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{$service_category->Name}}" >
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <input type="text" name="description" id="task-name" class="form-control" value="{{$service_category->Description}}" >
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