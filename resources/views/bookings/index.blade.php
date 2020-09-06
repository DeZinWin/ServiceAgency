@extends('layouts.master')

@section('content')
 
 <br><br>
    <a href="bookings/create">Create New Booking</a>
    <br><br>
   
        <div >
            
                 Booking
            
            <br>

            <div class="panel-body">
                <table class="table table-border">

                 
                    <thead>
                       <th> Customer Name</th>
                       
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Shop name</th>
                        <th>Service Item Name</th>
                        <th>Delete</th>
                        <th>Edit</th>

                    </thead>

                  
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                
                                <td class="table-text">
                                    <div>{{ $booking-> CustomerName }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking->Phone }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking-> Address }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking-> Date }}</div>
                                </td>

                              
                                @foreach($shops as $shop)
                                   @if($booking->shop_id==$shop->id)
                                       <td>{{$shop->Name}}</td>
                                   @endif
                                @endforeach

                                @foreach($service_items as $service_item)
                                   @if($bookings->service_item_id==$service_item->id)
                                       <td>{{$service_item->Name}}</td>
                                   @endif
                                @endforeach


                                 
                                <td>
                                <form action="/bookings/{{ $booking->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger">Delete </button>
                                    </form>
                                </td>
                                <td>
                                <a href="{{ route('bookings.edit',$booking->id)}}" class="btn btn-primary">Edit</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
    @endsection