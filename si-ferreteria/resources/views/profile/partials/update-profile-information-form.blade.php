<section>
    <header>
        <p class="mt-2 text-sm text-gray-300">
            Actualiza la información de tu cuenta personal y datos de contacto.
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 ">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <x-input-label for="name">
                    <x-icons.user></x-icons.user>
                    {{ __('Nombre') }}
                </x-input-label>
                <x-text-input
                    id="name"
                    name="name"
                    type="text"
                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white placeholder-gray-400 focus:border-yellow-500 focus:ring-yellow-500"
                    :value="old('name', $user->name)"
                    placeholder="Nombre"/>
                <x-input-error class="mt-2" :messages="$errors->get('name')"/>
            </div>

            <div>
                <x-input-label for="name" >
                   <x-icons.user></x-icons.user>
                    {{ __('Apellido(s)') }}
                </x-input-label>
                <x-text-input id="last_name" name="last_name" type="text"
                              class="mt-2 block w-full bg-gray-800 border-gray-600 text-white placeholder-gray-400 focus:border-yellow-500 focus:ring-yellow-500"
                              :value="old('last_name', $user->last_name)"
                              required autofocus autocomplete="last_name"/>
                <x-input-error class="mt-2" :messages="$errors->get('last_name')"/>
            </div>

            {{--Email--}}
            <div class="bg-gray-800/50 border border-gray-600/50 rounded-lg p-4">
                <x-input-label for="email">
                   <x-icons.email></x-icons.email>
                    {{ __('Correo Electrónico') }}
                    <span class="ml-2 text-xs bg-blue-600 text-white px-2 py-1 rounded-full">Solo Lectura</span>
                </x-input-label>
                <div class="mt-2 flex items-center">
                    <input
                        type="email"
                        value="{{ $user->email }}"
                        readonly
                        class="block w-full bg-gray-700 border-gray-500 text-gray-300 rounded-md shadow-sm cursor-not-allowed opacity-75"
                    />
                    <div class="ml-2 p-2 bg-blue-600 rounded-lg">
                       <x-icons.look></x-icons.look>
                    </div>
                </div>
                <p class="mt-1 text-xs text-blue-300">El correo no puede ser modificado por motivos de seguridad</p>
            </div>

            {{--Roles --}}
            <div class="bg-gray-800/50 border border-gray-600/50 rounded-lg p-4">
                <x-input-label class="text-gray-200 font-semibold flex items-center">
                   <x-icons.roles></x-icons.roles>
                    {{ __('Role Principal Asignado') }}
                    <span
                        class="ml-2 text-xs bg-emerald-600 text-white px-2 py-1 rounded-full">{{ $user->getRolPrincipal()->created_by }}</span>
                </x-input-label>
                <div class="mt-2 flex items-center">
                    <input
                        type="text"
                        value="{{ $user->getRolPrincipal()->name }}"
                        readonly
                        class="block w-full bg-gray-700 border-gray-500 text-gray-300 rounded-md shadow-sm cursor-not-allowed opacity-75"
                    />
                    <div class="ml-2 p-2 bg-blue-600 rounded-lg">
                        <x-icons.look></x-icons.look>
                    </div>
                </div>
                <p class="mt-1 text-xs text-blue-300">{{ $user->getRolPrincipal()->description }}</p>
            </div>

            <div>
                <x-input-label for="name" class="text-gray-200 font-semibold flex items-center">
                   <x-icons.phone></x-icons.phone>
                    {{ __('Teléfono') }}
                </x-input-label>
                <x-text-input id="phone" name="phone" type="text"
                              class="mt-2 block w-full bg-gray-800 border-gray-600 text-white placeholder-gray-400 focus:border-yellow-500 focus:ring-yellow-500"
                              :value="old('phone', $user->phone)"
                              required autofocus autocomplete="last_name"/>
                <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
            </div>

            <div>
                <x-input-label for="gender" class="text-gray-200 font-semibold flex items-center">
                   <x-icons.gender></x-icons.gender>
                    {{ __('Género') }}
                </x-input-label>
                <select name="gender" id="gender"
                        class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                    <option value="">Seleccionar género</option>
                    <option value="male" {{ old('gender', $user->gender) === 'male' ? 'selected' : '' }}>Masculino
                    </option>
                    <option value="female" {{ old('gender', $user->gender) === 'female' ? 'selected' : '' }}>Femenino
                    </option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')"/>
            </div>

            <div>
                <x-input-label for="document_type" class="text-gray-200 font-semibold flex items-center">
                   <x-icons.document_tipe></x-icons.document_tipe>
                    {{ __('Tipo de Documento') }}
                </x-input-label>
                <select
                    id="document_type"
                    name="document_type"
                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                    <option value="">Seleccionar tipo</option>
                    <option value="CI" {{ old('document_type', $user->document_type) === 'CI' ? 'selected' : '' }}>
                        Cédula de Identidad
                    </option>
                    <option value="NIT" {{ old('document_type', $user->document_type) === 'NIT' ? 'selected' : '' }}>
                        NIT
                    </option>
                    <option
                        value="PASSPORT" {{ old('document_type', $user->document_type) === 'PASSPORT' ? 'selected' : '' }}>
                        Pasaporte
                    </option>

                </select>
                <x-input-error class="mt-2" :messages="$errors->get('document_type')"/>
            </div>

            <div>
                <x-input-label for="document_number" class="text-gray-200 font-semibold flex items-center">
                    <x-icons.document_number></x-icons.document_number>
                    {{ __('Número de Documento') }}
                </x-input-label>
                <x-text-input
                    id="document_number"
                    name="document_number"
                    type="text"
                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white placeholder-gray-400 focus:border-yellow-500 focus:ring-yellow-500"
                    :value="old('document_number', $user->document_number)"
                    placeholder="Número de documento"/>
                <x-input-error class="mt-2" :messages="$errors->get('document_number')"/>
            </div>
            <div>
                <x-input-label for="address" class="text-gray-200 font-semibold flex items-center">
                    <x-icons.address></x-icons.address>
                    {{ __('Dirección') }}
                </x-input-label>
                <textarea
                    id="address"
                    name="address"
                    rows="3"
                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm resize-none"
                    placeholder="Ingresa tu dirección completa">{{ old('address', $user->address) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('address')"/>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>
                <x-icons.save></x-icons.save>
                {{ __('Guardar') }}
            </x-primary-button>

            @if (session('success'))
                <div x-data="{ show: true }"
                     x-show="show"
                     x-init="setTimeout(() => show = false, 3000)"
                     class="px-4 py-2 bg-green-500 text-white rounded-md">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </form>
</section>
