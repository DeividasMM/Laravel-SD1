@extends('layouts.app')

@section('title', 'User Management')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">System Users</h2>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['surname'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection