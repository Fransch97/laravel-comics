<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('favicon.ico')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Comics</title>
</head>
<body>
    {{-- HEADER  --}}
    @include('partials.header')
    {{--END HEADER  --}}

    {{-- MAIN  --}}
    <main>

        @include('partials.jambo')
        @yield('content')

    </main>
    {{-- END MAIN  --}}

    {{-- FOOTER  --}}
    @include('partials.footer')
    {{-- END FOOTER  --}}

    {{-- SOCIAL --}}
    @include('partials.social')
    {{-- END SOCIAL --}}

</body>
</html>
