@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h1 class="mb-4">Conference Management System</h1>
                <div class="student-info mb-4">
                    <h4>Student Information</h4>
                    <p class="mb-1"><strong>Name:</strong> Deividas</p>
                    <p class="mb-1"><strong>Surname:</strong> Petraitis</p>
                    <p class="mb-0"><strong>Group:</strong> IFF-2/1</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">System Access</h4>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">Client</h5>
                                <p class="card-text">View and register for conferences</p>
                                <a href="/client/conferences" class="btn btn-primary mt-auto">Enter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">Employee</h5>
                                <p class="card-text">View conferences and registrations</p>
                                <a href="/employee/conferences" class="btn btn-primary mt-auto">Enter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">Administrator</h5>
                                <p class="card-text">Manage system and conferences</p>
                                <a href="/admin" class="btn btn-primary mt-auto">Enter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection