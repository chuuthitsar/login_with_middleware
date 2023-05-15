@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        User Maintenance
                        <form action='{{route('admin.post',['id'=>$user->id])}}' method='post'> 
                             @csrf
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td><input type='text' name='nametxt' value='{{$user->name}}'></td>
                                    <td><input type='text' name='emailtxt' value='{{$user->email}}'></td>
                                    @if($user->is_admin==1)
                                    <td>Admin</td>
                                    @else
                                    <td>User</td>
                                    @endif
                                    <td><button type='submit' class="btn btn-primary">Save</button></td>
                                  </tr>
                            </tbody>
                          </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
