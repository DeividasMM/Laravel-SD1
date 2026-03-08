@extends('layouts.app')

@section('title', __('home.title'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h1 class="mb-4">{{ __('home.welcome') }}</h1>
                <div class="student-info mb-4">
                    <h4>{{ __('home.student_info') }}</h4>
                    <p class="mb-1"><strong>{{ __('home.name') }}:</strong> Deividas</p>
                    <p class="mb-1"><strong>{{ __('home.surname') }}:</strong> Petraitis</p>
                    <p class="mb-0"><strong>{{ __('home.group') }}:</strong> IFF-2/1</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">{{ __('home.subsystems') }}</h4>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">{{ __('home.client_subsystem') }}</h5>
                                <p class="card-text">{{ __('home.client_desc') }}</p>
                                <a href="/client/conferences" class="btn btn-primary mt-auto">{{ __('home.enter') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">{{ __('home.employee_subsystem') }}</h5>
                                <p class="card-text">{{ __('home.employee_desc') }}</p>
                                <a href="/employee/conferences" class="btn btn-primary mt-auto">{{ __('home.enter') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">{{ __('home.admin_subsystem') }}</h5>
                                <p class="card-text">{{ __('home.admin_desc') }}</p>
                                <a href="/admin" class="btn btn-primary mt-auto">{{ __('home.enter') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection