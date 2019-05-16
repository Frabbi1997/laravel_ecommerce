<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ config('app.name') }} </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @include('frontent.partials._navber')

</head>
<body>

@yield('main')

@include('frontent.partials._footer')

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>