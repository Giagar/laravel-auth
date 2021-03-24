@extends('layouts.base')

@section('main-title')
    <h2>All my favourite drinks</h2>
@endsection

@section('main-content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($drinks as $drink)
            <tr>
                <th>{{$drink->id}}</th>
                <td>{{$drink->name}}</td>
                <td>{{$drink->price}}</td>
                <td>...</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
