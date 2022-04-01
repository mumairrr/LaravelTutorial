@extends('layout.header')
@section('title','Users')
@section('apptheme')

@if(\Session::has('success'))
    <div class="alert alert-success">
    <p>{{(\Session::get('success'))}}</p>
    </div>
    @endif

    @if(\Session::has('fail'))
    <div class="alert alert-warning">
    <p>{{(\Session::get('fail'))}}</p>
    </div>
    @endif

<div class="container mt-5 text-center">
    <h1>Users Information</h1>
    <table class="table table-hover table-striped mt-5 ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach($user as $row)
    <tbody>
    <tr>
        <td>{{$row['id']}}</td>
        <td>{{$row['users_fname']}}</td>
        <td>{{$row['users_lname']}}</td>
        <td><a href="{{ url('/Edit') }}/{{$row['id']}}" class="btn btn-warning">Edit</a></td>
        <td><a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>

@endsection