<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <!-- Título -->
    <x-container-second-div>
        <div class="flex items-center ml-4">
            <x-input-label class="text-lg font-semibold">
                <x-icons.roles class="mr-2"></x-icons.roles>
                Administración de usuarios
            </x-input-label>
        </div>
    </x-container-second-div>

    <!-- Búsqueda -->
    <x-container-second-div>
        <div class="flex items-center space-x-2">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-icons.search class="h-5 w-5 text-gray-400"></x-icons.search>
                </div>
                <x-text-input
                    wire:model.live="search"
                    type="text"
                    placeholder="{{ __('Buscar por nombre, email, teléfono...') }}"
                    class="pl-10 pr-10"
                />
                @if($search)
                    <button
                        wire:click="clearSearch"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center hover:text-red-500 transition-colors">
                        <x-icons.close class="h-5 w-5 text-gray-400"></x-icons.close>
                    </button>
                @endif
            </div>
        </div>
    </x-container-second-div>

    <!-- Botón Crear Usuario -->
    <x-container-second-div>
        <div class="flex justify-end">
            <x-primary-button
                wire:click="openCreateModal"
                class="flex items-center bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800">
                <x-icons.user class="mr-2"></x-icons.user>
                {{ __('Crear Usuario') }}
            </x-primary-button>
        </div>
    </x-container-second-div>
</div>

<!-- Contador de resultados -->
@if($search)
    <div class="mb-4">
        <x-container-second-div>
            <div class="flex items-center justify-between p-3">
                <span class="text-sm text-gray-300">
                    <x-icons.search class="inline mr-1"></x-icons.search>
                    Resultados para: <strong>"{{ $search }}"</strong>
                </span>
                <button
                    wire:click="clearSearch"
                    class="text-sm text-blue-400 hover:text-blue-300 underline">
                    Limpiar búsqueda
                </button>
            </div>
        </x-container-second-div>
    </div>
@endif
