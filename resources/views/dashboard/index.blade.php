@extends('layout.header')
@section('title','Home')
@section('apptheme')

<div class="container mt-5 text-center">
    <div class="row">
        <h1 class="col">Dashboard</h1>
    </div>
    <table class="table table-warning mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection