@if($show_modal)
    <x-container-div class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <x-container-second-div class="max-w-lg w-full max-h-[90vh] overflow-y-auto">
            <x-container-div>
                <div>
                    <x-input-label class="flex justify-between">
                        {{ $editing_user ? 'Editar Usuario' : 'Crear Usuario' }}
                        <x-secondary-button wire:click="closeModal">
                            <x-icons.close></x-icons.close>
                            {{ __('Cerrar') }}
                        </x-secondary-button>
                    </x-input-label>
                </div>

                <div>
                    <form wire:submit.prevent="saveUser">
                        <x-container-div>
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
                                        wire:model="name"
                                        placeholder="Nombre"
                                        required/>
                                    <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                                </div>

                                <div>
                                    <x-input-label for="last_name">
                                        <x-icons.user></x-icons.user>
                                        {{ __('Apellido(s)') }}
                                    </x-input-label>
                                    <x-text-input
                                        id="last_name"
                                        name="last_name"
                                        type="text"
                                        wire:model="last_name"
                                        placeholder="Apellido(s)"
                                        required/>
                                    <x-input-error class="mt-2" :messages="$errors->get('last_name')"/>
                                </div>
                            </div>

                            <!-- Campo de Email - Editable solo en creación -->
                            <div
                                class="{{ $editing_user ? 'bg-gray-800/50 border border-gray-600/50 rounded-lg p-4' : '' }}">
                                <x-input-label for="email">
                                    <x-icons.email></x-icons.email>
                                    {{ __('Correo Electrónico') }}
                                    @if($editing_user)
                                        <span class="ml-2 text-xs bg-blue-600 text-white px-2 py-1 rounded-full">Solo Lectura</span>
                                    @endif
                                </x-input-label>

                                @if($editing_user)
                                    <div class="mt-2 flex items-center">
                                        <input
                                            type="email"
                                            readonly
                                            wire:model="email"
                                            class="block w-full bg-gray-700 border-gray-500 text-gray-300 rounded-md shadow-sm cursor-not-allowed opacity-75"
                                        />
                                        <div class="ml-2 p-2 bg-blue-600 rounded-lg">
                                            <x-icons.look></x-icons.look>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-blue-300">El correo no puede ser modificado por motivos
                                        de seguridad</p>
                                @else
                                    <x-text-input
                                        id="email"
                                        name="email"
                                        type="email"
                                        wire:model="email"
                                        placeholder="correo@ejemplo.com"
                                        required/>
                                @endif
                                <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                            </div>

                            <!-- Campo de Password -->
                            <div>
                                <x-input-label for="password">
                                    {{ $editing_user ? __('Nueva Contraseña (opcional)') : __('Contraseña') }}
                                </x-input-label>
                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    wire:model="password"
                                    placeholder="{{ $editing_user ? 'Dejar vacío para mantener la actual' : 'Mínimo 8 caracteres' }}"
                                />
                                <x-input-error class="mt-2" :messages="$errors->get('password')"/>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <x-input-label for="phone">
                                        <x-icons.phone></x-icons.phone>
                                        {{ __('Teléfono') }}
                                    </x-input-label>
                                    <x-text-input
                                        id="phone"
                                        name="phone"
                                        type="text"
                                        wire:model="phone"
                                        placeholder="Número de teléfono"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                                </div>

                                <div>
                                    <x-input-label for="gender">
                                        <x-icons.gender></x-icons.gender>
                                        {{ __('Género') }}
                                    </x-input-label>
                                    <select wire:model="gender" id="gender" required
                                            class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                                        <option value="">Seleccionar género</option>
                                        <option value="male">Masculino</option>
                                        <option value="female">Femenino</option>
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('gender')"/>
                                </div>

                                <div>
                                    <x-input-label for="document_type">
                                        <x-icons.document_tipe></x-icons.document_tipe>
                                        {{ __('Tipo de Documento') }}
                                    </x-input-label>
                                    <select
                                        wire:model="document_type"
                                        id="document_type"
                                        required
                                        class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                                        <option value="">Seleccionar tipo</option>
                                        <option value="CI">Cédula de Identidad</option>
                                        <option value="NIT">NIT</option>
                                        <option value="PASSPORT">Pasaporte</option>
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('document_type')"/>
                                </div>

                                <div>
                                    <x-input-label for="document_number">
                                        <x-icons.document_number></x-icons.document_number>
                                        {{ __('Numero de Documento') }}
                                    </x-input-label>
                                    <x-text-input
                                        wire:model="document_number"
                                        id="document_number"
                                        type="text"
                                        placeholder="Número de documento"
                                        required/>
                                    <x-input-error class="mt-2" :messages="$errors->get('document_number')"/>
                                </div>
                            </div>

                            <div>
                                <x-input-label for="address">
                                    <x-icons.address></x-icons.address>
                                    {{ __('Dirección') }}
                                </x-input-label>
                                <textarea
                                    wire:model="address"
                                    id="address"
                                    rows="3"
                                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm resize-none"
                                    placeholder="Ingresa la dirección completa"></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('address')"/>
                            </div>

                            <div>
                                <select
                                    wire:model="status"
                                    id="status"
                                    required
                                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                                    <option value="0">Inactivo</option>
                                    <option value="1">Activo</option>
                                </select>
                            </div>

                            <div>
                                <select
                                    wire:model="roles"
                                    id="roles"
                                    multiple
                                    required
                                    class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                                    @foreach($allRoles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </x-container-div>

                        <div class="flex justify-end mt-6">
                            <x-secondary-button type="button" wire:click="closeModal" class="mr-3">
                                {{ __('Cancelar') }}
                            </x-secondary-button>
                            <x-primary-button type="submit">
                                <x-icons.save></x-icons.save>
                                {{ $editing_user ? __('Actualizar') : __('Crear') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </x-container-div>
        </x-container-second-div>
    </x-container-div>
@endif
