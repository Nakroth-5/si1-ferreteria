<aside id="logo-sidebar"
       class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-gradient-to-b from-gray-800 via-gray-900 to-black shadow-2xl border-r-4 border-orange-600"
       aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-gradient-to-b from-gray-800 via-gray-900 to-black">
        <ul class="space-y-2 font-medium mt-4">

            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center p-3 text-orange-100 rounded-lg hover:bg-gradient-to-r hover:from-orange-600/20 hover:to-amber-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-orange-500">
                    <x-icons.dashboard></x-icons.dashboard>
                    <span class="ms-3 text-orange-100 group-hover:text-white font-medium">Panel Principal</span>
                </a>
            </li>

            <li>
                <a href="{{ route('users.index') }}"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-600/20 hover:to-indigo-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-blue-500">
                    <svg
                        class="w-6 h-6 text-blue-400 transition duration-300 group-hover:text-blue-300 group-hover:scale-110"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Empleados</span>
                </a>
            </li>


            <li>
                <a href="{{ route('roles.index') }}"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-emerald-600/20 hover:to-green-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-emerald-500">
                    <svg
                        class="w-6 h-6 text-emerald-400 transition duration-300 group-hover:text-emerald-300 group-hover:scale-110"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm-6 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm6.535 2.474a5.47 5.47 0 0 1-2.535.526 6 6 0 0 1-5 2.5 8 8 0 0 1-7-7c0-1.726.652-3.299 1.723-4.5M12 14.5c0 1.381-1.119 2.5-2.5 2.5S7 15.881 7 14.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5Z"/>
                    </svg>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Roles y Permisos</span>
                </a>
            </li>

            <li>
                <a href="#"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-600/20 hover:to-indigo-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/>
                    </svg>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Bitácora</span>
                </a>
            </li>

            <!-- Products - Tema "Inventario de Ferretería" -->
            <li>
                <a href="#"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-amber-600/20 hover:to-yellow-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-amber-500">
                    <svg
                        class="w-6 h-6 text-amber-400 transition duration-300 group-hover:text-amber-300 group-hover:scale-110"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                    </svg>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Productos</span>
                </a>
            </li>

            <li class="pt-4 mt-4">
                <div class="flex items-center">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-orange-600/50 to-transparent"></div>
                    <span class="px-3 text-xs font-medium text-orange-400 uppercase tracking-wider">Sistema</span>
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-orange-600/50 to-transparent"></div>
                </div>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                     class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-red-600/20 hover:to-red-700/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-red-500">
                        <x-icons.logout></x-icons.logout>
                        {{ __('Cerrar sesión') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </div>
</aside>
