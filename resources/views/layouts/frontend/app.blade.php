<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen dark:bg-gray-900 ">
        {{-- @include('layouts.navigation') --}}

        <!-- Page Heading -->
        @include('layouts.frontend.header')
        <!-- notifications news -->
            @if (session('success') || $errors->any())
                <div
                    x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 4000)"
                    x-show="show"
                    class="fixed top-5 right-5 z-50 px-6 py-4 rounded-md shadow-lg text-white transition-all duration-500"
                    :class="{
                        'bg-green-500': '{{ session('success') ? 'true' : 'false' }}' === 'true',
                        'bg-red-500': '{{ $errors->any() ? 'true' : 'false' }}' === 'true',
                    }"
                >
                    @if (session('success'))
                        {{ session('success') }}
                    @endif
    
                    @if ($errors->any())
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Page Footer -->
        @include('layouts.frontend.footer')
    </div>
</body>

</html>
