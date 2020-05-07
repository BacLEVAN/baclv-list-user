@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center">You have {{count($users)}} user(s)</h3>
    <div class="col-md-8">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Login type</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->login_type}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@stop
