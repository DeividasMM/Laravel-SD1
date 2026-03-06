@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body text-center">
                <h1>Welcome to Conference System</h1>
                <p class="lead">Frontend libraries successfully loaded</p>
                <button class="btn btn-primary" onclick="testAlert()">Test SweetAlert2</button>
            </div>
        </div>
    </div>
</div>

<script>
    function testAlert() {
        Swal.fire({
            title: 'Success!',
            text: 'Bootstrap and SweetAlert2 are working',
            icon: 'success'
        });
    }
</script>
@endsection