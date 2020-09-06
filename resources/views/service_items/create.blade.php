@extends('layouts.master')
@section('title','service_item')
@section('content')


<br>
<div class="col -md-6">
  
   <form action="/service_items" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Name</label>
       <input type="text" class="form-control" placeholder="Write your service item " id="name" name="name" >
      </div>

     

      <div class="form-group">
       <label for="name" class="font-weight-bold">Service category_Name</label>
        <select name="service_category_id">
           @foreach($service_categories as $service_category)
             <option value="{{$service_category->id}}">{{$service_category->Name}}</option>
           @endforeach
        </select>
      </div>

      

     <button type="submit" class="btn btn-info">Add</button>
   </form>
</div>
@endsection