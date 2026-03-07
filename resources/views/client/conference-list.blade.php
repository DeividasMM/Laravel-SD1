@extends('layouts.app')

@section('title', 'Conferences')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">Upcoming Conferences</h2>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="row g-4">
                    @foreach($conferences as $conference)
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $conference['title'] }}</h5>
                                <p class="card-text mb-2"><strong>Date:</strong> {{ $conference['date'] }}</p>
                                <p class="card-text mb-2"><strong>Time:</strong> {{ $conference['time'] }}</p>
                                <p class="card-text mb-3"><strong>Location:</strong> {{ $conference['address'] }}</p>
                                <div class="mt-auto">
                                    <a href="{{ route('client.conference.show', $conference['id']) }}" class="btn btn-primary me-2">View Details</a>
                                    <form action="{{ route('client.register') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="conference_id" value="{{ $conference['id'] }}">
                                        <button type="submit" class="btn btn-success">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a href="/" class="btn btn-secondary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection