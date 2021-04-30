<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="CMS Power full">

    <title>@yield('title') | AppName</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">

    <!-- Styles -->
    @stack('before-style')
    <link rel="stylesheet" href="{{ asset('common/css/app.css') }}">
    @stack('after-style')

</head>

<body>

    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')

    <!-- Scripts -->
    @stack('before-script')
    <script src="{{ asset('common/js/app.js') }}" defer></script>
    @stack('after-script')

</body>

</html>