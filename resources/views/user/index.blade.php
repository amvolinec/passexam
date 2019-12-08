@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Users
                        <a class="dropdown-item" href="{{ route('admin.users.create') }}">Create user</a>
                    </div>

                    <div class="card-body">


                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @auth


                            <table class="table table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users AS $user)
                                    <tr>
                                        <th scope="row">{{ $user->id  }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

