<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <title>{{ config('app.name') }}</title>

</head>
<style>

</style>

<body>
    @include('layout.nav')
    <main>
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
    </main>


</body>

</html>
