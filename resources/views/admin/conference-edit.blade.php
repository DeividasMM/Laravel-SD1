@extends('layouts.app')

@section('title', 'Edit Conference')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">Edit Conference</h2>

                <form action="{{ route('admin.conferences.update', $conference['id']) }}" method="POST">
                    @csrf

                    @include('admin.conference-form-fields')

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">Update Conference</button>
                        <a href="{{ route('admin.conferences') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection