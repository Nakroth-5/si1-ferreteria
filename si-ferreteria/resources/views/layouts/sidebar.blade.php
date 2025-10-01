<aside id="logo-sidebar"
       class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-gradient-to-b from-gray-800 via-gray-900 to-black shadow-2xl border-r-4 border-orange-600"
       aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-gradient-to-b from-gray-800 via-gray-900 to-black">
        <ul class="space-y-2 font-medium mt-4">
            <li class="pt-4 mt-4">
                <x-dividers title="Gestión de Usuarios y Seguridad" />
            </li>

            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center p-3 text-orange-100 rounded-lg hover:bg-gradient-to-r hover:from-orange-600/20 hover:to-amber-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-orange-500">
                    <x-icons.dashboard/>
                    <span class="ms-3 text-orange-100 group-hover:text-white font-medium">Panel Principal</span>
                </a>
            </li>

            <li>
                <a href="{{ route('users.index') }}"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-600/20 hover:to-indigo-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-blue-500">
                   <x-icons.user-sidebar/>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Gestion de Usuarios y asignación de Roles </span>
                </a>
            </li>

            <li>
                <a href="{{ route('roles.index') }}"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-emerald-600/20 hover:to-green-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-emerald-500">
                    <x-icons.permissions-sidebar/>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Gestion de Roles y asignación de permisos</span>
                </a>
            </li>

            <li>
                <a href="{{ route('permissions.index') }}"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-emerald-600/20 hover:to-green-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-emerald-500">
                   <x-icons.permission/>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Gestion de Permisos</span>
                </a>
            </li>

            <li>
                <a href="{{ route('audit-logs.index') }}"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-600/20 hover:to-indigo-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-blue-500">
                    <x-icons.audit_log/>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Bitácora</span>
                </a>
            </li>

            <li class="pt-4 mt-4">
                <x-dividers title="Gestión de Inventario"/>
            </li>
            <li>
                <a href="#"
                   class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-amber-600/20 hover:to-yellow-600/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-amber-500">
                    <x-icons.products/>
                    <span class="ms-3 text-gray-300 group-hover:text-white font-medium">Productos</span>
                </a>
            </li>

            <li class="pt-4 mt-4">
                <x-dividers title="Sistema"/>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                     class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-red-600/20 hover:to-red-700/20 group transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-l-4 border-transparent hover:border-red-500">
                        <x-icons.logout/>
                        {{ __('Cerrar sesión') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </div>
</aside>
