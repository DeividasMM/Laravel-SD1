@extends('layouts.app')

@section('title', __('admin.user_management'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">{{ __('admin.system_users') }}</h2>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('admin.name') }}</th>
                                <th>{{ __('admin.surname') }}</th>
                                <th>{{ __('admin.email') }}</th>
                                <th>{{ __('app.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['surname'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user['id']) }}" class="btn btn-primary btn-sm">{{ __('app.edit') }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">{{ __('app.back_to_dashboard') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<script>
    window.successMessage = "{{ session('success') }}";
</script>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.successMessage) {
            Swal.fire({
                icon: 'success',
                title: window.successMessage,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
</script>
@endsection