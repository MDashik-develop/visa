<aside aria-label="Sidebar"
class="fixed top-0 left-0 z-40 w-64 h-screen pt-6 pb-4 bg-white border-r border-gray-200 flex flex-col"
id="sidebar">
<div class="px-6 flex items-center mb-8">
    {{-- <img alt="Company logo, a blue square with white initials" class="w-10 h-10 rounded-md" height="40"
        src="https://storage.googleapis.com/a1aa/image/8bf4fcd7-4532-4611-54f7-3756a6e510b2.jpg" width="40" /> --}}
    <span class="ml-3 text-xl font-semibold text-indigo-700">
        Hello!
    </span>
    <button data-drawer-target="sidebar-multi-level-sidebar"
       data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
       type="button"
       class="sidebarIcon inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
       <span class="sr-only">Open sidebar</span>
       <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg">
           <path clip-rule="evenodd" fill-rule="evenodd"
               d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
           </path>
       </svg>
   </button>
</div>
<nav class="flex-1 px-4 overflow-y-auto">
    <ul class="space-y-1 font-medium text-gray-700">
        @if (auth()->check() && auth()->user()->role === 'admin')
          <li>
             <a class="flex items-center px-4 py-3 rounded-lg transition-colors duration-200 hover:bg-indigo-600 hover:text-white {{ Request::routeIs('dashboard') ? 'bg-indigo-600 text-white' : '' }}"
                   href="{{ route('dashboard') }}">
                   <i class="fas fa-tachometer-alt w-5 h-5">
                   </i>
                   <span class="ml-3">
                      Dashboard
                   </span>
             </a>
          </li>
          <li>
             <button aria-controls="website-menu" aria-expanded="false"
                class="
                   {{ Request::is('admin/website*') ? 'bg-indigo-600 text-white' :'' }}
                   flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('website-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-globe w-5 h-5">
                      </i>
                      <span class="ml-3">
                         Website's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="website-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="website-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.website.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.website.index') }}">
                         All Website
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.website.content') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.website.content') }}">
                         Web Content
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="user-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/user*') ? 'bg-indigo-600 text-white' :'' }}
                   flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('user-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-users w-5 h-5">
                      </i>
                      <span class="ml-3">
                         User's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="user-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="user-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.user.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.user.index') }}">
                         All Users
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.user.create') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.user.create') }}">
                         Create Users
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="countries-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/countries*') ? 'bg-indigo-600 text-white' :'' }}
                    flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('countries-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-flag w-5 h-5">
                      </i>
                      <span class="ml-3">
                         Countries's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="countries-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="countries-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.countries.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.countries.index') }}">
                         All Countries
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.countries.create') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.countries.create') }}">
                         Create Countries
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="visa-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/visa*') ? 'bg-indigo-600 text-white' :'' }}
                   flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('visa-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-passport w-5 h-5">
                      </i>
                      <span class="ml-3">
                         Visa's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="visa-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="visa-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.visa.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.visa.index') }}">
                         All Visa
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.visa.create') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.visa.create') }}">
                         Create Visa
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="visa-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/study*') ? 'bg-indigo-600 text-white' :'' }}
                   flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('study-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-graduation-cap w-5 h-5">
                      </i>
                      <span class="ml-3">
                         Study's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="study-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="study-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.visa.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.study.index') }}">
                         All Study
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.study.create') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.study.create') }}">
                         Create Study
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.degree.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.degree.index') }}">
                         Degree's
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="visa-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/university*') ? 'bg-indigo-600 text-white' :'' }}
                   flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('university-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-university w-5 h-5">
                      </i>
                      <span class="ml-3">
                         University's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="university-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="university-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.visa.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.university.index') }}">
                         All University
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.university.create') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.university.create') }}">
                         Create University
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="applications-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/application*') ? 'bg-indigo-600 text-white' :'' }}
                    flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('applications-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-file-alt w-5 h-5">
                      </i>
                      <span class="ml-3">
                         Application's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="applications-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="applications-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.applications.index') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.applications.index') }}">
                         All Applications
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.applications.create') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.applications.create') }}">
                         Create Applications
                      </a>
                   </li>
             </ul>
          </li>
          <li>
             <button aria-controls="messages-menu" aria-expanded="false"
                   class="
                   {{ Request::is('admin/message*') ? 'bg-indigo-600 text-white' :'' }}
                    flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   onclick="toggleDropdown('messages-menu')" type="button">
                   <span class="flex items-center">
                      <i class="fas fa-envelope w-5 h-5">
                      </i>
                      <span class="ml-3">
                         Messages's
                      </span>
                   </span>
                   <i class="fas fa-chevron-down transition-transform duration-300" id="messages-menu-icon">
                   </i>
             </button>
             <ul class="mt-1 ml-8 space-y-1 hidden" id="messages-menu">
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.message') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.message') }}">
                         All Message
                      </a>
                   </li>
                   <li>
                      <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('admin.subscribe') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                         href="{{ route('admin.subscribe') }}">
                         All Subscribe
                      </a>
                   </li>
             </ul>
          </li>
        @endif
        <li>
            <button aria-controls="profile-menu" aria-expanded="false"
                class="
                   {{ Request::is('profile*') ? 'bg-indigo-600 text-white' :'' }}
                    flex items-center justify-between w-full px-4 py-3 rounded-lg hover:bg-indigo-600 hover:text-white text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500"
                onclick="toggleDropdown('profile-menu')" type="button">
                <span class="flex items-center">
                    <i class="fas fa-user-circle w-5 h-5">
                    </i>
                    <span class="ml-3">
                        My Acount
                    </span>
                </span>
                <i class="fas fa-chevron-down transition-transform duration-300" id="profile-menu-icon">
                </i>
            </button>
            <ul class="mt-1 ml-8 space-y-1 hidden" id="profile-menu">
                <li>
                    <a class="block px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white {{ Request::routeIs('profile.edit') ? 'bg-indigo-600 text-white' : 'text-gray-700' }}"
                        href="{{ route('profile.edit') }}">
                        My Profile
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
</aside>
<script>
function toggleDropdown(id) {
    const menu = document.getElementById(id);
    const icon = document.getElementById(id + '-icon');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        menu.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}
</script>
