@extends('layout.header')
@section('title','Edit')
@section('apptheme')

<div class="container mt-5 text-center justify-content-center">
    <h1>Edit User Details</h1>
    <div class="container">

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

        <form method="POST" action="{{ url('updateUserInformation') }}">
            {{csrf_field()}}
            <input type="hidden" name="hdn_id" value="{{$user->id}}">
            <div class="form-group">
                <input type="text" name="first_name" class="form-control " value="{{ $user->users_fname }}">
            </div>
            <div class="form-group">
            <input type="text" name="last_name" class="form-control " value="{{ $user->users_lname }}">
            </div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
</div>

@endsection