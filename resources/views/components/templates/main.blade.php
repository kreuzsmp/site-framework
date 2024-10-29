<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/54e3236c49.js" crossorigin="anonymous"></script>
</head>
<body class="bg-bigBlac">
<x-navbar navcolor="{{$navcolor}}"></x-navbar>
@if(isset($header))
    {{ $header }}
@endif
<main class="text-white-100 container px-4 mx-auto">
    {{ $content }}
</main>
<x-footer></x-footer>
</body>
</html>
