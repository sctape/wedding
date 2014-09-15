<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salmon Jess Wedding</title>
    {{ Helpers::css() }}
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <div class="container">
        <div class="page-header">
            <h1>Sam & Jess Wedding <small>September 6th, 2015</small></h1>
        </div>
    </div>




    <div class="container">
        @include('layouts.partials.nav')

        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    {{ Helpers::js() }}
    {{ HTML::script('js/rsvp.js') }}
    <script>$('#flash-overlay-modal').modal();</script>
</body>
</html>