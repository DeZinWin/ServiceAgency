@extends('layouts.master')
@section('title','football')
@section('content')


<br>
<div class="col -md-6">
  
   <form action="/regions" method="post">
    @csrf
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Name</label><br>
       <input type="text" class="form-control" placeholder="Write your  name" id="name" name="name" >
      </div>

     <button type="submit" class="btn btn-info"> <i class="fa fa-plus"></i>Add</button>
   </form>
   
</div>

@endsection