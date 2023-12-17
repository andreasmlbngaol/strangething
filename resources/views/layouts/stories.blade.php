<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Strange Thing | Story</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
</head>
<body>
    <main class="sidebar d-flex flex-nowrap">
        @include('partial.sidebars')
        <div class="container">
            @yield("header")
            @yield('content')
            @yield('picture')
        </div>
    </main>

    <script src="{{ asset('js/boxicons.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebars.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
</body>
</html>