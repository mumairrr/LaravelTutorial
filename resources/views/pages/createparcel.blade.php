@extends('layout.header')
@section('title','Create Users')
@section('apptheme')

<div class="container mt-5 text-center ">
    <h1>Add Parcels</h1>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('') }}" class="align-items-center">
    {{ @csrf_field() }}
    <div class="row mb-3">
        <div class="col-6">
            <label for="ParcelName" class="form-label">Parcel Name</label>
            <input type="text" class="form-control" id="ParcelName" name="">
        </div>
        <div class="col-6">
            <label for="Parcel " class="form-label">Last Name</label>
            <input type="text" class="form-control" id="LastName" name="users_lname">
        </div>    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection