@extends('layouts.master')

@section('content')
 
 <br><br>
    <a href="townships/create">Create New Township</a>
    <br><br>
   
        <div >
            
                 Township
            
            <br>

            <div class="panel-body">
                <table class="table table-border">

                 
                    <thead>
                        <th>Name</th>
                       
                        <th>Region_name</th>
                        <th>Delete </th>
                        <th>Edit</th>
                    </thead>

                  
                    <tbody>
                        @foreach ($townships as $township)
                            <tr>
                                
                                <td class="table-text">
                                    <div>{{ $township->Name }}</div>
                                </td>

                              
                                @foreach($regions as $region)
                                   @if($township->region_id==$region->id)
                                       <td>{{$region->Name}}</td>
                                   @endif
                                @endforeach


                                 
                                <td>
                                <form action="/townships/{{ $township->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger">Delete </button>
                                    </form>
                                </td>
                                <td>
                                <a href="{{ route('townships.edit',$township->id)}}" class="btn btn-primary">Edit</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
    @endsection