<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'EHDOnlineStore')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('meta')
    @yield('styles')
</head>
<body class="skin-blue layout-top-nav">

<div class="wrapper">
    @section('header')
        @include('partials.header')
    @show

    <div class="content-wrapper">
        <section class="content">
            @section('alerts')
                @include('partials.alerts')
            @show
            @yield('content-header')
            @yield('content')
        </section>
    </div>

    @section('footer')
        @include('partials.footer')
    @show
</div>

<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
