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
            
            <aside id="sidebar-multi-level-sidebar"
                class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-white text-black"
                aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto">


                    <!-- Sidebar Menu -->
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center p-2 rounded-lg group 
                                {{ Request::routeIs('dashboard') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 bg-gray-200 hover:text-white' }}">
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
                                {{ Request::is('admin/website*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 bg-gray-200 hover:text-white' }}"
                                aria-controls="dropdown-website" data-collapse-toggle="dropdown-website">
                                <svg class="shrink-0 w-5 h-5 text-black group-hover:text-white
                                    {{ Request::is('admin/website*') ? ' text-white' : ' hover:text-white' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Website's</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-website" class="{{ Request::is('admin.website*') ? '' : 'hidden' }} py-2 space-y-2">
                                <li>
                                    <a href="{{ route('admin.website.index') }}"
                                        class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                        {{ Request::routeIs('admin.website.index') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                        All Website
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.website.content') }}"
                                        class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                        {{ Request::routeIs('admin.website.content') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                        Website Content
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group 
                                {{ Request::is('admin/user*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 bg-gray-200 hover:text-white' }}"
                                aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg class="shrink-0 w-5 h-5 text-black group-hover:text-white
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
                                {{ Request::is('admin/visa*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 bg-gray-200 hover:text-white' }}"
                                aria-controls="dropdown-visa" data-collapse-toggle="dropdown-visa">
                                <svg class="shrink-0 w-5 h-5 text-black group-hover:text-white
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
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group 
                                {{ Request::is('admin/countries*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 bg-gray-200 hover:text-white' }}"
                                aria-controls="dropdown-countries" data-collapse-toggle="dropdown-countries">
                                <svg class="shrink-0 w-5 h-5 text-black group-hover:text-white
                                    {{ Request::is('admin/countries*') ? ' text-white' : ' hover:text-white' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Countries's</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-countries"
                                class="{{ Request::is('visa*') ? '' : 'hidden' }} py-2 space-y-2">
                                <li>
                                    <a href="{{ route('admin.countries.index') }}"
                                        class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                        {{ Request::routeIs('admin.countries.index') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                        All Countries
                                    </a>
                                    </li>
                                <li>
                                    <a href="{{ route('admin.countries.create') }}"
                                        class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                        {{ Request::routeIs('admin.countries.create') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                        Create Countries
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group 
                                {{ Request::is('admin/applications*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 bg-gray-200 hover:text-white' }}"
                                aria-controls="dropdown-applications" data-collapse-toggle="dropdown-applications">
                                <svg class="shrink-0 w-5 h-5 text-black group-hover:text-white
                                    {{ Request::is('admin/applications*') ? ' text-white' : ' hover:text-white' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">application's</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-applications"
                                class="{{ Request::is('applications*') ? '' : 'hidden' }} py-2 space-y-2">
                                <li>
                                    <a href="{{ route('admin.applications.index') }}"
                                        class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                        {{ Request::routeIs('admin.applications.index') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                        All Applications
                                    </a>
                                    </li>
                                <li>
                                    <a href="{{ route('admin.applications.create') }}"
                                        class="flex items-center w-full p-2 pl-11 transition duration-75 rounded-lg group 
                                        {{ Request::routeIs('admin.applications.create') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white' }}">
                                        Create Applications
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

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
