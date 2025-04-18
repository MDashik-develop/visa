<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
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



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        {{-- @include('layouts.navigation') --}}
        {{-- @include('layouts.sidebar') --}}

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset
        {{-- <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

        <aside id="sidebar-multi-level-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-white text-black"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto">
                <!-- Sidebar Toggle Button -->
                {{-- <button data-drawer-target="sidebar-multi-level-sidebar"
                    data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 mb-4 text-sm text-black bg-gray-200 rounded-lg hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <span class="sr-only">Toggle sidebar</span>
                    <svg class="w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button> --}}

                <!-- Sidebar Menu -->
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center p-2 rounded-lg group 
                            {{ Request::routeIs('dashboard') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                            <svg class="w-5 h-5 text-black group-hover:text-white
                                {{ Request::routeIs('dashboard') ? ' text-white' : 'hover:bg-indigo-600 hover:text-white' }}"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group 
                            {{ Request::is('admin/user*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="shrink-0 w-5 h-5 text-white group-hover:text-white
                                {{ Request::is('admin/user*') ? ' text-white' : ' hover:text-white' }}"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">User's</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="{{ Request::is('user*') ? '' : 'hidden' }} py-2 space-y-2">
                            <li>
                                <a href="{{ route('admin.user.index') }}"
                                    class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                    {{ Request::routeIs('admin.user.index') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                    All Users
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.user.create') }}"
                                    class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                    {{ Request::routeIs('admin.user.create') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                    Create Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group 
                            {{ Request::is('admin/visa*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}"
                            aria-controls="dropdown-visa" data-collapse-toggle="dropdown-visa">
                            <svg class="shrink-0 w-5 h-5 text-white group-hover:text-white
                                {{ Request::is('admin/visa*') ? ' text-white' : ' hover:text-white' }}"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Visa's</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-visa" class="{{ Request::is('visa*') ? '' : 'hidden' }} py-2 space-y-2">
                            <li>
                                <a href="{{ route('admin.visa.index') }}"
                                    class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                    {{ Request::routeIs('admin.visa.index') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                    All Visa
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.visa.create') }}"
                                    class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                    {{ Request::routeIs('admin.visa.create') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                    Create visa
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="sm:ml-64">

            @include('layouts.header')
            

            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>


                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>

            </div>
        </div>
















        <!-- Page Content -->
        {{-- <main>
                {{ $slot }}
            </main> --}}
    </div>
</body>

</html>
