<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>

        <div class="jumbo">
            <h5>CURRENT SERIES</h5>
        </div>

        <div class="comics">
            @include('partials.series')
        </div>

        @include('partials.banner')

    </main>
    @include('partials.footer')
</body>

</html>
