@extends("layouts.main")
@section('content')
<h3>Edit Page</h3>
<div class="col-lg-8">
<form action="{{ route('shops.update', $shop->id) }}" method="post" enctype="multipart/form-data">
@csrf

@method('PUT') 
<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>


<div class="form-group">
    <label for="name">Name</label>
    <input type="name" id="name" name="name" value="{{$shop->Name}}" class="form-control @error('name') is-invalid @enderror" />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="{{$shop->Address}}" class="form-control @error('address') is-invalid @enderror" />
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" value="{{$shop->Phone}}" class="form-control @error('phone') is-invalid @enderror" />
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <select name="township_id" id="township_id" value="{{$shop->township->Name}}" class="form-control">
     @foreach($townships as $township)
       <option value="{{$township->id}}">{{$township->Name}}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group">
    <select name="servicecategory_id" id="servicecategory_id" value="{{$shop->service_category->Name}}" class="form-control">
     @foreach($servicecategories as $servicecategory)
       <option value="{{$servicecategory->id}}">{{$servicecategory->Name}}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group">
    <label for="image">Image</label>
    <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" />
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="openingtime">OpeningTime</label>
    <input type="time" id="openingtime" name="openingtime" value="{{$shop->OpeningTime}}" class="form-control @error('openingtime') is-invalid @enderror" />
    @error('openingtime')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="closingtime">ClosingTime</label>
    <input type="time" id="closingtime" name="closingtime" value="{{$shop->ClosingTime}}" class="form-control @error('closingtime') is-invalid @enderror" />
    @error('closingtime')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="form-group">
        <input type="submit" value="Update" />
    </div>


</form>
</div>
@endsection