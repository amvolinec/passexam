@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Users
                        <a class="dropdown-item" href="{{ route('company.create') }}">Create user</a>
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
                                @foreach($companies AS $company)
                                    <tr>
                                        <th scope="row">{{ $company->id  }}</th>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->phone }}</td>
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

