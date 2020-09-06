@extends('layouts.master')

@section('content')
 
 <br><br>
    <a href="service_items/create">Create New Service Item</a>
    <br><br>
   
        <div >
            
                Service Item
            
            <br>

            <div class="panel-body">
                <table class="table table-border">

                 
                    <thead>
                        <th>Name</th>
                       
                        <th>Service Category Name</th>
                        <th>Delete </th>
                        <th>Edit</th>
                    </thead>

                  
                    <tbody>
                        @foreach ($service_items as $service_item)
                            <tr>
                                
                                <td class="table-text">
                                    <div>{{ $service_item->Name }}</div>
                                </td>

                              
                                @foreach($service_categories as $service_category)
                                   @if($service_item->service_category_id==$service_category->id)
                                       <td>{{$service_category->Name}}</td>
                                   @endif
                                @endforeach


                                 
                                <td>
                                <form action="/serice_items/{{ $service_item->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger">Delete </button>
                                    </form>
                                </td>
                                <td>
                                <a href="{{ route('service_items.edit',$service_item->id)}}" class="btn btn-primary">Edit</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
    @endsection