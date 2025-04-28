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


        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Tooltip CSS -->
        <link rel="stylesheet" href="https://unpkg.com/tooltip.js/dist/tooltip.min.css">

        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Ensure lists have proper styles */
        main{
            ul, ol {
                list-style-position: outside;
                margin: 10px 0;
                padding-left: 20px; /* Indent lists */
            }
        }
    </style>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- @include('layouts.navigation') --}}
            @include('layouts.sidebar')

            <div class="sm:ml-64">

               @include('layouts.header')
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


               <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

                  <!-- Page Content -->
                  <main>
                     {{ $slot }}
                  </main>

               </div>

            </div>
         </div>
    </body>
</html>
