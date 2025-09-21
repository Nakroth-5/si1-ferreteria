<x-app-layout>
    <div class="py-20 bg-gradient-to-r from-gray-900 via-gray-900 to-black shadow-xl border-b-2 border-orange-600 ">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div
                class="p-6 sm:p-8 bg-gradient-to-r from-gray-900 via-gray-950 to-gray-800 shadow-xl rounded-lg border-l-4 border-orange-600 transform hover:scale-[1.01] transition-transform duration-200">
                <div>
                    <!-- Header de la sección -->
                    <div class="flex items-center mb-4 pb-2 border-b border-orange-200">
                        <svg class="w-5 h-5 text-orange-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-orange-900">Información Personal</h3>
                    </div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div
                class="p-6 sm:p-8 bg-gradient-to-r from-gray-900 via-gray-950 to-gray-800 shadow-xl rounded-lg border-l-4 border-orange-600 transform hover:scale-[1.01] transition-transform duration-200">
                <div>
                    <!-- Header de la sección -->
                    <div class="flex items-center mb-4 pb-2 border-b border-red-200">
                        <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-red-900">Seguridad y Contraseña</h3>
                    </div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
