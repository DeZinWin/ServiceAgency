@extends('layouts.master')
@section('title','Bookings')
@section('content')


<br>
<div class="col -md-6">
  
   <form action="/bookings" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
       <label for="name" class="font-weight-bold">Customer Name</label>
       <input type="text" class="form-control" placeholder="Enter your name" id="name" name="name" >
      </div>

      <div class="form-group">
       <label for="price" class="font-weight-bold">Phone</label>
       <input type="number" class="form-control" placeholder="Write your phone number" id="phone" name="phone" >
      </div>

      <div class="form-group">
       <label for="description" class="font-weight-bold">Address</label>
       <input type="number" class="form-control" placeholder="Write your address" id="address" name="address" >
      </div>

      <div class="form-group">
       <label for="price" class="font-weight-bold">Date</label>
       <input type="date" class="form-control" placeholder="Write your date" id="date" name="date" >
      </div>

     
      <div class="form-group">
       <label for="name" class="font-weight-bold">Shop_Name</label>
        <select name="shop_id">
           @foreach($shops as $shop)
             <option value="{{$shop->id}}">{{$shop->Name}}</option>
           @endforeach
        </select>
      </div>


      <div class="form-group">
       <label for="name" class="font-weight-bold">Service Item Name</label>
        <select name="service_item_id">
           @foreach($service_items as $service_item)
             <option value="{{$service_item->id}}">{{$service_item->Name}}</option>
           @endforeach
        </select>
      </div>

      

     <button type="submit" class="btn btn-info">Add</button>
   </form>
</div>
@endsection