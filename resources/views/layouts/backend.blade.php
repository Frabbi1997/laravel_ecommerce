<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">

    <title>@yield('title','Dashboard') - {{ config('app.name') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="{{ mix ('css/backend.css') }}" rel="stylesheet">

</head>

<body>

@include('backend.partials._navber')

<div class="container-fluid">
    <div class="row">
        @include('backend.partials.sideber')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            @yield('main')

        </main>
    </div>
</div>

<script src="{{ mix('js/backend.js') }}"></script>
</body>
</html>
