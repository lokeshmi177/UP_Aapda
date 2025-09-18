<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LokAyukta CRMS')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- CSRF token for AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-100">

    {{-- Header --}}
    @if (!Request::is('admin/login'))
        @include('partials.header')
    @endif

    {{-- Main Content --}}
    <main class="p-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scripts --}}
    @stack('scripts')
</body>
</html>
