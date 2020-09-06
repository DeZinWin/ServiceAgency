@extends("layouts.main")
@section('content')
<h3>Category List</h3>
<div class="col-lg-12">
<div class="row">

<table class="table table-warning">
    <thead>
        <th>NO</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Township</th>
        <th>ServiceCategory</th>
        <th>Image</th>
        <th>OpeningTime</th>
        <th>ClosingTime</th>
        <th colspan=2>Action</th>
    </thead>
    <tbody>
        @foreach($shops as $shop)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$shop->Name}}</td>
            <td>{{$shop->Address}}</td>
            <td>{{$shop->Phone}}</td>
            <td>{{$shop->township->Name}}</td>
            <td>{{$shop->service_category->Name}}</td>
            
            <td><img src="{{asset('/uploads/'.$shop->Image)}}" width="80" height="80"/></td>
            <td>{{$shop->OpeningTime}}</td>
            <td>{{$shop->ClosingTime}}</td>
            <form action="{{ route('shops.destroy',$shop->id) }}" method="POST">
            <td> <a href="{{ route('shops.edit',$shop->id)}}" class="btn btn-primary">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>    
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection