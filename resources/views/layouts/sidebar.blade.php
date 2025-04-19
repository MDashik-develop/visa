<!-- Sidebar -->
<aside x-data="{ collapsed: false }"
       :class="collapsed ? 'w-20' : 'w-64'"
       class="h-screen fixed top-0 left-0 bg-white dark:bg-gray-800 shadow-lg z-50 transition-all duration-300 ease-in-out overflow-hidden">

    <!-- Header with Toggle Button -->
    <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
        <span class="text-xl font-semibold text-gray-900 dark:text-white" x-show="!collapsed">
            Admin Panel
        </span>
        <button @click="collapsed = !collapsed"
                class="text-gray-600 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400">
            <!-- Toggle Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Menu -->
    <nav class="mt-6">
        <ul class="space-y-2 text-sm">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-2 px-4 py-2 hover:bg-green-100 dark:hover:bg-green-900
                   {{ request()->routeIs('dashboard') ? 'bg-green-200 dark:bg-green-800 text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
                    </svg>
                    <span x-show="!collapsed">Dashboard</span>
                </a>
            </li>

            <!-- Users with submenu -->
            <li x-data="{ open: {{ request()->is('admin/users*') ? 'true' : 'false' }} }" class="relative">
                <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-2 hover:bg-green-100 dark:hover:bg-green-900
                        {{ request()->is('admin/users*') ? 'bg-green-200 dark:bg-green-800 text-white' : '' }}">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a4 4 0 00-3-3.87M9 20h6M4 20h5v-2a4 4 0 00-3-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span x-show="!collapsed">Users</span>
                    </div>

                    <svg x-show="!collapsed" class="w-4 h-4 transform transition-transform duration-200"
                         :class="open ? 'rotate-90' : ''"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <ul x-show="open && !collapsed" class="ml-4 mt-2 space-y-1 transition-all">
                    <li>
                        <a href="{{ route('admin.users.index') }}"
                           class="block px-4 py-2 rounded hover:bg-green-100 dark:hover:bg-green-900
                           {{ request()->routeIs('admin.users.index') ? 'bg-green-300 dark:bg-green-700 text-white' : '' }}">
                            All Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}"
                           class="block px-4 py-2 rounded hover:bg-green-100 dark:hover:bg-green-900
                           {{ request()->routeIs('admin.users.create') ? 'bg-green-300 dark:bg-green-700 text-white' : '' }}">
                            Create User
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Settings -->
            <li>
                <a href="{{ route('admin.settings') }}"
                   class="flex items-center gap-2 px-4 py-2 hover:bg-green-100 dark:hover:bg-green-900
                   {{ request()->routeIs('admin.settings') ? 'bg-green-200 dark:bg-green-800 text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4v2m0 12v2m8-8h2M4 12H2m15.364-7.364l1.414 1.414M5.636 5.636L4.222 7.05m12.728 12.728l1.414-1.414M5.636 18.364l-1.414-1.414" />
                    </svg>
                    <span x-show="!collapsed">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
