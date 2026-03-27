<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Conference System')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{ __('app.system_name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        @auth
                        <span class="nav-link">{{ auth()->user()->name }} {{ auth()->user()->surname }}</span>
                        @else
                        <a class="nav-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                        @endauth
                    </li>
                    <li class="nav-item">
                        @auth
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm ms-2">{{ __('app.logout') }}</button>
                        </form>
                        @else
                        <button class="btn btn-outline-light btn-sm ms-2" disabled>{{ __('app.logout') }}</button>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>

</html>