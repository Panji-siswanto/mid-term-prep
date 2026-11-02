<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Binus Student Portal')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="d-flex flex-column">

    @include('components.header')
    @include('components.navbar')

    <main class="container my-4 flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>