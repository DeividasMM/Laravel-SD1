@extends('layouts.app')

@section('title', __('admin.create_conference'))

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">{{ __('admin.create_new_conference') }}</h2>

                <form action="{{ route('admin.conferences.store') }}" method="POST">
                    @csrf

                    @include('admin.conference-form-fields')

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">{{ __('admin.create_conference') }}</button>
                        <a href="{{ route('admin.conferences') }}" class="btn btn-secondary">{{ __('app.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if($errors->any())
<div id="validation-errors" data-errors='@json($errors->all())' style="display: none;"></div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const errorsDiv = document.getElementById('validation-errors');
        if (errorsDiv) {
            const errors = JSON.parse(errorsDiv.dataset.errors);
            let errorList = '<ul style="text-align: left;">';
            errors.forEach(function(error) {
                errorList += '<li>' + error + '</li>';
            });
            errorList += '</ul>';

            Swal.fire({
                icon: 'error',
                title: 'Klaida',
                html: errorList,
                confirmButtonColor: '#e74c3c'
            });
        }
    });
</script>
@endsection