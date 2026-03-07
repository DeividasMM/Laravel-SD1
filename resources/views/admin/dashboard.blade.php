@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">Administrator Dashboard</h2>
                <p class="text-muted">Manage system users and conferences</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">User Management</h5>
                        <p class="card-text">View and edit system users</p>
                        <a href="{{ route('admin.users') }}" class="btn btn-primary mt-auto">Manage Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">Conference Management</h5>
                        <p class="card-text">Create, edit and delete conferences</p>
                        <a href="#" class="btn btn-primary mt-auto disabled">Manage Conferences</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="/" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>
@endsection