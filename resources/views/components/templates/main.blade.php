<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="prefetch" href="{{ Vite::asset('resources/images/model.webp') }}" as="image" type="image/png">
    <link rel="prefetch" href="{{ Vite::asset('resources/images/bg.webp') }}" as="image" type="image/png">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" type="image/x-icon">
</head>
<body class="bg-black text-white selection:bg-darkgray/75">
<div class="fixed w-full h-screen z-30 bg-black flex justify-center items-center transition duration-[2000ms] inset-0" id="preload">
    <svg class="size-12 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_nOfF{animation:spinner_qtyZ 2s cubic-bezier(0.36,.6,.31,1) infinite}.spinner_fVhf{animation-delay:-.5s}.spinner_piVe{animation-delay:-1s}.spinner_MSNs{animation-delay:-1.5s}@keyframes spinner_qtyZ{0%{r:0}25%{r:3px;cx:4px}50%{r:3px;cx:12px}75%{r:3px;cx:20px}100%{r:0;cx:20px}}</style><circle class="spinner_nOfF" cx="4" cy="12" r="3"/><circle class="spinner_nOfF spinner_fVhf" cx="4" cy="12" r="3"/><circle class="spinner_nOfF spinner_piVe" cx="4" cy="12" r="3"/><circle class="spinner_nOfF spinner_MSNs" cx="4" cy="12" r="3"/></svg>
</div>
<main class="mx-auto">
    {{ $content }}
</main>
<x-footer></x-footer>
</body>
</html>
