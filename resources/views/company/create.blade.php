@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        User create
                    </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('company.store') }}" method="POST">
                            @method('post')
                            @csrf

                            <input type="text" name="name" value="Company" required>
                            <input type="text" name="code" value="Code" required>
                            <input type="text" name="vat" value="VAT" required>
                            <input type="text" name="address" value="Address" required>
                            <input type="text" name="email" value="Email" required>
                            <input type="text" name="phone" value="860633215" required>
                            <input type="text" name="iban" value="LV12365478921" required>
                            <textarea type="text" name="description" required>Nice company</textarea>
                            <input type="hidden" name="user_id" value="{{ $user_id }}">
                            <div>
                                <button class="btn btn-sm btn-success mt-3" type="submit">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


