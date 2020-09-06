@extends("layouts.main")
@section('content')
<div class="col-lg-8" style="margin-left:50px;">
<form action="/shops" enctype="multipart/form-data" method="post">
@csrf
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
    <input type="name" id="name" name="name" class="form-control @error('name') is-invalid @enderror" />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" />
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" />
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <select name="township_id" id="township_id" class="form-control">
     @foreach($townships as $township)
       <option value="{{$township->id}}">{{$township->Name}}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group">
    <select name="servicecategory_id" id="servicecategory_id" class="form-control">
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
    <input type="time" id="openingtime" name="openingtime" class="form-control @error('openingtime') is-invalid @enderror" />
    @error('openingtime')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="closingtime">ClosingTime</label>
    <input type="time" id="closingtime" name="closingtime" class="form-control @error('closingtime') is-invalid @enderror" />
    @error('closingtime')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="form-group">
        <input type="submit" value="Add" />
    </div>

</form>
</div>
@endsection