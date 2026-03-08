@extends('layouts.app')

@section('title', __('admin.conference_management'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">{{ __('admin.conferences') }}</h2>

                <div class="mb-3">
                    <a href="{{ route('admin.conferences.create') }}" class="btn btn-success">{{ __('admin.create_new_conference') }}</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('admin.title') }}</th>
                                <th>{{ __('admin.date') }}</th>
                                <th>{{ __('admin.time') }}</th>
                                <th>{{ __('admin.address') }}</th>
                                <th>{{ __('app.actions') }}</th>
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
                                    <a href="{{ route('admin.conferences.edit', $conference['id']) }}" class="btn btn-primary btn-sm">{{ __('app.edit') }}</a>
                                    @if(strtotime($conference['date']) >= strtotime(date('Y-m-d')))
                                    <form method="POST" action="{{ route('admin.conferences.delete', $conference['id']) }}" class="delete-form" style="display: inline;">
                                        @csrf
                                        <button type="button" class="btn btn-danger btn-sm delete-btn" data-conference-title="{{ $conference['title'] }}">{{ __('app.delete') }}</button>
                                    </form>
                                    @else
                                    <button class="btn btn-danger btn-sm" disabled>{{ __('app.delete') }}</button>
                                    @endif
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
@if(session('error'))
<script>
    window.errorMessage = "{{ session('error') }}";
</script>
@endif
<script>
    window.adminTranslations = {
        confirmDeleteTitle: "{{ __('admin.confirm_delete_title') }}",
        confirmDeleteText: "{{ __('admin.confirm_delete_text') }}",
        yesDelete: "{{ __('admin.yes_delete') }}",
        cancel: "{{ __('app.cancel') }}"
    };
</script>
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

        if (window.errorMessage) {
            Swal.fire({
                icon: 'error',
                title: window.errorMessage,
                showConfirmButton: true
            });
        }

        document.querySelectorAll('.delete-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const form = this.closest('.delete-form');
                const conferenceTitle = this.getAttribute('data-conference-title');

                Swal.fire({
                    title: window.adminTranslations.confirmDeleteTitle,
                    text: window.adminTranslations.confirmDeleteText,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e74c3c',
                    cancelButtonColor: '#2c3e50',
                    confirmButtonText: window.adminTranslations.yesDelete,
                    cancelButtonText: window.adminTranslations.cancel
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection