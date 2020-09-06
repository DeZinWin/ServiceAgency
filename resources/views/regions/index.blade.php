@extends('layouts.master')
@section('title','Index')
@section('content')
 
 <br><br>
    <a href="regions/create">Create New Region</a>
    <br><br>
   
        <div class="panel panel-default">
            <div class="panel-heading">
                Region
            </div>
            <br>

            <div class="panel-body">
                <table class="table table-hover">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Delete
                        </th>
                        <th>Edit
                       </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($regions as $region)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">

                                    <div>{{ $region->Name }}</div>

                                </td>
                               
                                 <!-- Delete Button -->
                                <td>
                                <form action="/regions/{{ $region->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger">Delete </button>
                                    </form>
                                </td>
                                <td>
                                <a href="{{ route('regions.edit',$region->id)}}" class="btn btn-primary">Edit</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  
    @endsection