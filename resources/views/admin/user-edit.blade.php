@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">Edit User</h2>

                <form action="{{ route('admin.users.update', $user['id']) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user['name']) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ old('surname', $user['surname']) }}">
                        @error('surname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user['email']) }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">Update User</button>
                        <a href="{{ route('admin.users') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection