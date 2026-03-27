@extends('layouts.app')

@section('title', __('employee.conference_details'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">{{ $conference['title'] }}</h2>

                <div class="mb-3">
                    <h5>{{ __('employee.conference_details') }}</h5>
                    <hr>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('employee.date') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['date'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('employee.time') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['time'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('employee.address') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['address'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('employee.lecturers') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['lecturers'] }}</div>
                </div>

                <div class="mb-4">
                    <h5 class="mt-4">{{ __('employee.description') }}</h5>
                    <hr>
                    <p>{{ $conference['description'] }}</p>
                </div>

                <div class="mb-3">
                    <h5 class="mt-4">{{ __('employee.registered_clients') }}</h5>
                    <hr>
                </div>

                @if(count($registeredClients) > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('employee.client_name') }}</th>
                                <th>{{ __('employee.client_email') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registeredClients as $client)
                            <tr>
                                <td>{{ $client->name }} {{ $client->surname }}</td>
                                <td>{{ $client->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="text-muted">No clients registered yet.</p>
                @endif

                <div class="mt-4">
                    <a href="{{ route('employee.conferences') }}" class="btn btn-secondary">{{ __('employee.back_to_list') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection