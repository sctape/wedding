<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salmon Jess Wedding</title>
    {{ Helpers::css() }}
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    @if(Auth::check())
        <div class="container">
            <div class="page-header">
                    <div class="pull-right"><a class="text-muted" href="{{ route('sessions.destroy') }}">Logout</a></div>
                <h1>Sam & Jess Wedding <small>September 6th, 2015</small></h1>
            </div>
            @include('layouts.partials.nav')
        </div>
    @endif

    <div class="container">
            @include('layouts.partials.page-header')
            @include('flash::message')
            @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    {{ Helpers::js() }}
    {{ HTML::script('js/rsvp.js') }}
    <script>$('#flash-overlay-modal').modal();</script>
</body>
</html>