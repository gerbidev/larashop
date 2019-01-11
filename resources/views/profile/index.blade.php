@extends('layouts.app')

@section('page')
    title page
@stop

@section('content')
    <h2>Profile</h2>
    <hr>

    <h3>User Details</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="2">User Details <a href="" class="pull-right"><i class="fa fa-cogs">Edit User</i></a></th>
            </tr>
        </thead>
        <tr>
            <th>ID</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th>Registered At</th>
            <td>{{$user->created_at}}</td>
        </tr>
    </table>

@stop