@extends('layouts.app')

@section('title', __('admin.dashboard'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">{{ __('admin.dashboard') }}</h2>
                <p class="text-muted">{{ __('admin.dashboard_subtitle') }}</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">{{ __('admin.user_management') }}</h5>
                        <p class="card-text">{{ __('admin.user_management_desc') }}</p>
                        <a href="{{ route('admin.users') }}" class="btn btn-primary mt-auto">{{ __('admin.manage_users') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">{{ __('admin.conference_management') }}</h5>
                        <p class="card-text">{{ __('admin.conference_management_desc') }}</p>
                        <a href="{{ route('admin.conferences') }}" class="btn btn-primary mt-auto">{{ __('admin.manage_conferences') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="/" class="btn btn-secondary">{{ __('app.back_to_home') }}</a>
        </div>
    </div>
</div>
@endsection