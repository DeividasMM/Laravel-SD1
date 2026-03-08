@extends('layouts.app')

@section('title', __('client.conference_details'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">{{ $conference['title'] }}</h2>

                <div class="mb-3">
                    <h5>{{ __('client.conference_details') }}</h5>
                    <hr>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('client.date') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['date'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('client.time') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['time'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('client.address') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['address'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3"><strong>{{ __('client.lecturers') }}:</strong></div>
                    <div class="col-md-9">{{ $conference['lecturers'] }}</div>
                </div>

                <div class="mb-3">
                    <h5 class="mt-4">{{ __('client.description') }}</h5>
                    <hr>
                    <p>{{ $conference['description'] }}</p>
                </div>

                <div class="mt-4">
                    <form action="{{ route('client.register') }}" method="POST" id="registerForm" class="d-inline">
                        @csrf
                        <input type="hidden" name="conference_id" value="{{ $conference['id'] }}">
                        <button type="button" id="registerBtn" class="btn btn-success" data-conference-title="{{ $conference['title'] }}">{{ __('client.register_for_conference') }}</button>
                    </form>
                    <a href="{{ route('client.conferences') }}" class="btn btn-secondary">{{ __('client.back_to_list') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.clientTranslations = {
        confirmRegister: "{{ __('client.confirm_register') }}",
        yesRegister: "{{ __('client.yes_register') }}",
        cancel: "{{ __('app.cancel') }}"
    };
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('registerBtn').addEventListener('click', function() {
            const form = document.getElementById('registerForm');
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
</script>
@endsection