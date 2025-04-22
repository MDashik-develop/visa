<!-- Topbar -->
<header
    class="flex items-center justify-between bg-white border-b border-gray-200 px-6 h-16 fixed w-full md:static md:w-auto z-20">
    <div class="flex items-center space-x-4">

        <button data-drawer-target="sidebar-multi-level-sidebar"
            data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
            type="button"
            class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
        <img alt="Admin Panel Logo, stylized letters AP in blue and white" class="h-10 w-10 rounded"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/657ffbad-f2b2-4e8b-8325-20cf2cbb358e.jpg"
            width="40" />
    </div>
    <h1 class="hidden md:block text-2xl font-semibold text-gray-800">
        Dashboard
    </h1>
    <div class="flex items-center space-x-4">
        {{-- <button
            class="relative text-gray-600 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 rounded">
            <i class="fas fa-bell fa-lg">
            </i>
            <span
                class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full ring-2 ring-white">
            </span>
        </button> --}}
        <div class="flex items-center space-x-3 cursor-pointer group">
            <img alt="Profile picture of John Doe, a smiling man with short brown hair"
                class="w-10 h-10 rounded-full object-cover" height="40"
                src="https://cdn-icons-png.flaticon.com/512/219/219958.png"
                width="40" />
            <div class="hidden sm:block">
                <p class="text-gray-800 font-semibold">
                    {{ Auth::user()->name }}
                </p>
                {{-- <p class="text-gray-500 text-sm">
                    Administrator
                </p> --}}
            </div>
            {{-- <i class="fas fa-chevron-down text-gray-500 group-hover:text-blue-600 transition"></i> --}}
        </div>
    </div>
</header>
