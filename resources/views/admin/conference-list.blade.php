@extends('layouts.app')

@section('title', 'Conference Management')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">Conferences</h2>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <div class="mb-3">
                    <a href="{{ route('admin.conferences.create') }}" class="btn btn-success">Create New Conference</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($conferences as $conference)
                            <tr>
                                <td>{{ $conference['title'] }}</td>
                                <td>{{ $conference['date'] }}</td>
                                <td>{{ $conference['time'] }}</td>
                                <td>{{ $conference['address'] }}</td>
                                <td>
                                    <a href="{{ route('admin.conferences.edit', $conference['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                                    @if(strtotime($conference['date']) >= strtotime(date('Y-m-d')))
                                    <form method="POST" action="{{ route('admin.conferences.delete', $conference['id']) }}" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this conference?')">Delete</button>
                                    </form>
                                    @else
                                    <button class="btn btn-danger btn-sm" disabled>Delete</button>
                                    @endif
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