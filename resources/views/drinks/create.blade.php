@extends('layouts.base')

@section('main-title')
    Add your favourite drink
@endsection

@section('main-content')

<form action="{{route('drinks.store')}}" method="POST">
@csrf
@method('POST')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="name">Price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="Enter name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
