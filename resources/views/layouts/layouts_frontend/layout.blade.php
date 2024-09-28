<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

        <title>@yield('page_title') - {{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="@yield('page_description')" />
        <meta name="keywords" content="@yield('page_keywords')" />


        @yield('head_script')
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/app.scss'])
        @production
            @include('components.frontend.yandex')
        @endproduction
    </head>

    <body>
        @yield('content')
    </div>

        @stack('scripts')
        @stack('styles')
    </body>
</html>
