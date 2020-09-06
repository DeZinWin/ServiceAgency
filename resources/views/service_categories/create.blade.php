@extends('layouts.master')
@section('title','service_category')
@section('content')


<br>
<div class="col -md-6">
  
   <form action="/service_categories" method="post">
    @csrf
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Name</label><br>
       <input type="text" class="form-control" placeholder="Write your  name" id="name" name="name" >
      </div>
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Description</label><br>
       <input type="text" class="form-control" placeholder="Write your description" id="name" name="description" >
      </div>

     <button type="submit" class="btn btn-info"> <i class="fa fa-plus"></i>Add</button>
   </form>
   
</div>

@endsection