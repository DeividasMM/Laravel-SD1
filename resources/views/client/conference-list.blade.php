@extends('layouts.app')

@section('title', __('client.conferences'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">{{ __('client.conference_list') }}</h2>

                <div class="row g-4">
                    @foreach($conferences as $conference)
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $conference['title'] }}</h5>
                                <p class="card-text mb-2"><strong>{{ __('client.date') }}:</strong> {{ $conference['date'] }}</p>
                                <p class="card-text mb-2"><strong>{{ __('client.time') }}:</strong> {{ $conference['time'] }}</p>
                                <p class="card-text mb-3"><strong>{{ __('client.address') }}:</strong> {{ $conference['address'] }}</p>
                                <div class="mt-auto">
                                    <a href="{{ route('client.conference.show', $conference['id']) }}" class="btn btn-primary me-2">{{ __('client.view') }}</a>
                                    <form action="{{ route('client.register') }}" method="POST" class="register-form d-inline">
                                        @csrf
                                        <input type="hidden" name="conference_id" value="{{ $conference['id'] }}">
                                        <button type="button" class="btn btn-success register-btn" data-conference-title="{{ $conference['title'] }}">{{ __('client.register') }}</button>
                                    </form>
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
    window.clientTranslations = {
        confirmRegister: "{{ __('client.confirm_register') }}",
        yesRegister: "{{ __('client.yes_register') }}",
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

        document.querySelectorAll('.register-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const form = this.closest('.register-form');
                const conferenceTitle = this.getAttribute('data-conference-title');

                Swal.fire({
                    title: window.clientTranslations.confirmRegister,
                    text: conferenceTitle,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3498db',
                    cancelButtonColor: '#2c3e50',
                    confirmButtonText: window.clientTranslations.yesRegister,
                    cancelButtonText: window.clientTranslations.cancel
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