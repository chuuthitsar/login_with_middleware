@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-md-4">
            @include('layouts.sidebar')  
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        User Maintenance
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key=> $user)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->is_admin==1)
                                    <td>Admin</td>
                                    @else
                                    <td>User</td>
                                    @endif
                                    <td><a href='{{route('admin.edit',['id'=>$user->id])}}' class="btn btn-primary">Edit</a></td>
                                    <td><a href='{{route('admin.delete',['id'=>$user->id])}}' class="btn btn-primary">Delete</a></td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
