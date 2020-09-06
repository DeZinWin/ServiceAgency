@extends('layouts.master')
@section('title','township')
@section('content')


<br>
<div class="col -md-6">
  
   <form action="/townships" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Name</label>
       <input type="text" class="form-control" placeholder="Write your township name" id="name" name="name" >
      </div>

     

      <div class="form-group">
       <label for="name" class="font-weight-bold">Region_Name</label>
        <select name="region_id">
           @foreach($regions as $region)
             <option value="{{$region->id}}">{{$region->Name}}</option>
           @endforeach
        </select>
      </div>

      

     <button type="submit" class="btn btn-info">Add</button>
   </form>
</div>
@endsection