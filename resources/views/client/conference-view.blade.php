@extends('layouts.app')

@section('title', 'Conference Details')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
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

                <div class="mb-3">
                    <h5 class="mt-4">Description</h5>
                    <hr>
                    <p>{{ $conference['description'] }}</p>
                </div>

                <div class="mt-4">
                    <form action="{{ route('client.register') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="conference_id" value="{{ $conference['id'] }}">
                        <button type="submit" class="btn btn-success">Register for Conference</button>
                    </form>
                    <a href="{{ route('client.conferences') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection