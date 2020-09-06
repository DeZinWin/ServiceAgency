@extends('layouts.master')
@section('title','service_categories')
@section('content')
 
 <br><br>
    <a href="service_categories/create">Create New Service Categories</a>
    <br><br>
   
        <div class="panel panel-default">
            <div class="panel-heading">
            Service categories
            </div>
            <br>

            <div class="panel-body">
                <table class="table table-hover">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Delete
                        </th>
                        <th>Edit
                       </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($service_categories as $service_category)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">

                                    <div>{{ $service_category->Name }}</div>

                                </td>


                                <td class="table-text">

                               <div>{{ $service_category->Description }}</div>

                              </td>
                               
                                 <!-- Delete Button -->
                                <td>
                                <form action="/service_categories/{{ $service_category->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger">Delete </button>
                                    </form>
                                </td>
                                <td>
                                <a href="{{ route('service_categories.edit',$service_category->id)}}" class="btn btn-primary">Edit</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  
    @endsection