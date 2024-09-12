@extends('layouts.app')
@section('content')

{{-- <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" type="text/css" media="all"> --}}
@include('includes.head')
<div class="sidebar">
<div class="navbar">
    <img src="{{asset('assets/img/home.svg')}}" alt="">
    <a href="{{url('/admin')}}">
        Dashboard
    </a>
</div>
<div class="navbar">
    <img src="{{asset('assets/img/explore.svg')}}" alt="">
    <a href="#">
        Users
    </a>
</div>
<div class="navbar">
    <img src="{{asset('assets/img/library.svg')}}" alt="">
    <a href="#">
        Transaction
    </a>
</div>
<div class="navbar">
    <img src="{{asset('assets/img/subscriptions.svg')}}" alt="">
    <a href="#">
        Operation
    </a>
</div>
</div>
<div class="container">
    <div class="row" style="padding-left: 50px">
        <div class="col-md-12">
            <h3>Admin Dashboard</h3>
            <p>Welcome, Admin!</p>
            <h4>Users</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Admin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user) 
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if ($user->account)
                            <td>₦{{ $user->account->balance }}</td>
                            @else
                                <td>No account</td>
                            @endif
                            <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                            <td>
                               <a href="#" class="btn btn-danger">Delete</a> <!-- Add more admin actions here like delete or promote user -->
                            </td>
                            <td>
                               <a href="#" class="btn btn-success">Edit</a> <!-- Add more admin actions here like delete or promote user -->
                            </td>
                            <td>
                               <a href="#" class="btn btn-default">Update</a> <!-- Add more admin actions here like delete or promote user -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
