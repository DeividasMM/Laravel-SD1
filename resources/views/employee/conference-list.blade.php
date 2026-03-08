@extends('layouts.app')

@section('title', __('employee.conferences'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">{{ __('employee.conference_list') }}</h2>

                <div class="row g-4">
                    @foreach($conferences as $conference)
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $conference['title'] }}</h5>
                                <p class="card-text mb-2"><strong>{{ __('employee.date') }}:</strong> {{ $conference['date'] }}</p>
                                <p class="card-text mb-2"><strong>{{ __('employee.time') }}:</strong> {{ $conference['time'] }}</p>
                                <p class="card-text mb-3"><strong>{{ __('employee.address') }}:</strong> {{ $conference['address'] }}</p>
                                <div class="mt-auto">
                                    <a href="{{ route('employee.conference.show', $conference['id']) }}" class="btn btn-primary">{{ __('employee.view') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a href="/" class="btn btn-secondary">{{ __('app.back_to_home') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection