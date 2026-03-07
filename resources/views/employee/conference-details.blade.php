@extends('layouts.app')

@section('title', 'Conference Details')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">{{ $conference['title'] }}</h2>

                <div class="mb-3">
                    <h5>Conference Information</h5>
                    <hr>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>Date:</strong></div>
                    <div class="col-md-9">{{ $conference['date'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>Time:</strong></div>
                    <div class="col-md-9">{{ $conference['time'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>Location:</strong></div>
                    <div class="col-md-9">{{ $conference['address'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>Lecturers:</strong></div>
                    <div class="col-md-9">{{ $conference['lecturers'] }}</div>
                </div>

                <div class="mb-4">
                    <h5 class="mt-4">Description</h5>
                    <hr>
                    <p>{{ $conference['description'] }}</p>
                </div>

                <div class="mb-3">
                    <h5 class="mt-4">Registered Clients</h5>
                    <hr>
                </div>

                @if(count($conference['registered_clients']) > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($conference['registered_clients'] as $client)
                            <tr>
                                <td>{{ $client['name'] }}</td>
                                <td>{{ $client['email'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="text-muted">No clients registered yet.</p>
                @endif

                <div class="mt-4">
                    <a href="{{ route('employee.conferences') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection